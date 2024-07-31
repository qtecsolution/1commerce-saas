<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Package;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubscriptionPayment;
use Illuminate\Support\Facades\Auth;
use App\Library\SslCommerz\SslCommerzNotification;
use Carbon\Carbon;

class SslCommerzPaymentController extends Controller
{
    public function index(Request $request)
    {
        # Here you have to receive all the order data to imitate the payment.
        # Let's say, your oder transaction information are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.
        $subscription = Subscription::find($request->subscription_id);
        $user = User::find($subscription->user_id);
        $package = Package::find($subscription->package_id);

        # BASIC INFORMATION
        $post_data = array();
        $post_data['total_amount'] = $package->price;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid();

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $user->name;
        $post_data['cus_email'] = $user->email;
        $post_data['cus_add1'] = $user->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = $user->phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = $package->title;
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";


        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('subscription_payments')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'subscription_id' => $subscription->id,
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'is_extension_payment' => $request->is_extension_payment ? true : false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payment gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function success(Request $request)
    {
        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();
        #Check order status in order table against the transaction id or order id.
        $order_details = DB::table('subscription_payments')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount', 'email', 'is_extension_payment')
            ->first();

        $user = User::where('email', $order_details->email)->first();
        if ($user) {
            Auth::login($user);
        }

        if ($order_details->status == 'Pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successful transaction to customer
                */
                $update_product = DB::table('subscription_payments')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Complete']);

                // update subscription status
                $payment = SubscriptionPayment::where('transaction_id', $tran_id)->first();
                $subscription = Subscription::with('package_details')->find($payment->subscription_id);
                if ($payment->is_extension_payment == 1) {
                    $subscription->ending_date = Carbon::parse($subscription->ending_date)->addDays($subscription->package_details->duration);
                } else {
                    $subscription->is_paid = 1;
                }
                $subscription->is_paid = 1;
                $subscription->save();
                // echo "<br >Transaction is successfully Completed";

                alert('Success', 'Transaction is successfully Completed', 'success');
            }
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            /*
                That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to update database.
             */
            // echo "Transaction is successfully Completed";

            alert('Success', 'Transaction is successfully Completed', 'success');
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            // echo "Invalid Transaction";

            alert('Error', 'Invalid Transaction', 'error');
        }
        return to_route('subscription.index');
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('subscription_payments')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount', 'email', 'is_extension_payment')
            ->first();

        $user = User::where('email', $order_details->email)->first();
        if ($user) {
            Auth::login($user);
        }

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('subscription_payments')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            // echo "Transaction is Failed";

            alert('Error', 'Transaction Failed', 'error');
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            // echo "Transaction is already Successful";

            alert('Error', 'Transaction is already Successful', 'error');
        } else {
            // echo "Transaction is Invalid";
            alert('Error', 'Transaction is Invalid', 'error');
        }
        return to_route('subscription.index');
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('subscription_payments')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount', 'email', 'is_extension_payment')
            ->first();

        $user = User::where('email', $order_details->email)->first();
        if ($user) {
            Auth::login($user);
        }

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('subscription_payments')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            // echo "Transaction is Cancel";
            alert('Error', 'Transaction is Cancel', 'error');
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            // echo "Transaction is already Successful";
            alert('Error', 'Transaction is already Successful', 'error');
        } else {
            // echo "Transaction is Invalid";
            alert('Error', 'Transaction is Invalid', 'error');
        }
        return to_route('subscription.index');
    }

    public function ipn(Request $request)
    {
        #Received all the payment information from the gateway
        if ($request->input('tran_id')) #Check transition id is posted or not.
        {
            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('subscription_payments')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount', 'email', 'is_extension_payment')
                ->first();

            $user = User::where('email', $order_details->email)->first();
            if ($user) {
                Auth::login($user);
            }

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('subscription_payments')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Complete']);

                    // echo "Transaction is successfully Completed";

                    alert('Success', 'Transaction is successfully Completed', 'success');
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                // echo "Transaction is already successfully Completed";

                alert('Success', 'Transaction is already successfully Completed', 'success');
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                // echo "Invalid Transaction";

                alert('Error', 'Invalid Transaction', 'error');
            }
        } else {
            // echo "Invalid Data";

            alert('Error', 'Invalid Data', 'error');
        }

        return to_route('subscription.index');
    }
}
