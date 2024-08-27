<?php

namespace App\Http\Controllers\User\Finance;

use App\Models\Withdraw;
use App\Models\UserWallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\Finance\TransactionController;

class WalletController extends Controller
{
    protected $chargePercent = 5;

    public function __construct(
        protected TransactionController $transactionController,
    ) {
        $this->transactionController = $transactionController;
    }

    public function createOneWallet(Request $request)
    {
        UserWallet::updateOrCreate(
            [
                'user_id' => auth()->id(),
            ],
            [
                'security_code' => $request->security_code ?? rand(10000, 99999),
                'status' => $request->status ?? 1
            ]
        );

        toast('Wallet setup successful.', 'success');
        return back();
    }

    public function myWallet()
    {
        $userWallet = UserWallet::where('user_id', auth()->id())->first();
        return view('customer.finance.my-wallet', compact('userWallet'));
    }

    public function transactionHistory(Request $request)
    {
        $transactions = Transaction::where('user_id', auth()->id())->latest()->paginate(10);
        return view('customer.finance.transaction-history', compact('transactions'));
    }

    public function withdraw(Request $request)
    {
        $userWallet = UserWallet::where('user_id', auth()->id())->first();
        $chargePercent = $this->chargePercent;

        if ($request->isMethod('post')) {
            // Start the transaction
            DB::beginTransaction();

            try {
                $request->validate([
                    'amount' => 'required|numeric',
                    'payment_method' => 'required',
                ]);

                // Double check the balance inside the transaction
                $userWallet->refresh();
                if ($userWallet->balance < $request->amount) {
                    DB::rollBack();
                    toast('Insufficient balance.', 'error');
                    return back();
                }

                if ($request->security_code != $userWallet->security_code) {
                    DB::rollBack();
                    toast('Security code does not match.', 'error');
                    return back();
                }

                $withdraw = new Withdraw();
                $withdraw->user_id = auth()->id();
                $withdraw->user_wallet_id = $userWallet->id;
                $withdraw->amount = $request->amount;
                $withdraw->charge = round($withdraw->amount * ($chargePercent / 100), 2);
                $withdraw->payable = $withdraw->amount - $withdraw->charge;
                $withdraw->payment_method = $request->payment_method;
                $withdraw->status = 0;

                if ($request->payment_method == 'Bank') {
                    $withdraw->details = json_encode([
                        'payment_method' => $request->payment_method,
                        'account_number' => $request->account_number,
                        'account_name' => $request->account_name,
                        'bank_name' => $request->bank_name,
                        'branch_name' => $request->branch_name,
                        'district' => $request->district,
                        'routing_number' => $request->routing_number
                    ]);
                } else {
                    $withdraw->details = json_encode([
                        'payment_method' => $request->payment_method,
                        'account_number' => $request->account_number,
                    ]);
                }
                $withdraw->save();

                $this->transactionController->creditTransaction($userWallet->id, $withdraw);

                // Commit the transaction
                DB::commit();

                toast('Withdraw request submitted.', 'success');
                return back();
            } catch (\Exception $e) {
                // Rollback the transaction on error
                DB::rollBack();
                toast('Something went wrong. Please try again.', 'error');
                return back();
            }
        }

        return view('customer.finance.withdraw.index', compact('userWallet', 'chargePercent'));
    }

    public function withdrawHistory()
    {
        $withdraws = Withdraw::where('user_id', auth()->id())->latest()->paginate(10);
        return view('customer.finance.withdraw.history', compact('withdraws'));
    }

    public function withdrawDetails($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        return view('customer.finance.withdraw.details', compact('withdraw'));
    }
}
