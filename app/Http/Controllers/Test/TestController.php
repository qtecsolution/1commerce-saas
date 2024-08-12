<?php

namespace App\Http\Controllers\Test;

use App\Models\PosCart;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use App\Models\Template\Template;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Template\SeedeeTemplate;
use App\Models\Template\UlaunchTemplate;

class TestController extends Controller
{
    // function to test
    public function index(Request $request)
    {
        // Template::create([
        //     'name' => 'Seedee',
        //     'slug' => 'seedee',
        //     'assets_path' => 'seedee',
        //     'blade_path' => 'seedee'
        // ]);
        abort(404);
        SeedeeTemplate::create([
            'user_id' => 2,
            'status' => 1,
            'color' => json_encode([
                ["foreground_color" => "#ffffff"],
                ["background_color" => "#cae9d7"],
                ["primary_text_color" => "#cae9d7"],
                ["secondary_text_color" => "#000000"],
            ]),
            'hero_area' => json_encode([
                "title" => "সুপার “সিড“ শরীরের শক্তি ও কর্মক্ষমতা বাড়ানোর জন্য খুবই উপকারী",
                "description" => "এতে আছে প্রচুর ওমেগা-৩ ফ্যাটি অ্যাসিড, কোয়েরসেটিন, কেম্পফেরল, ক্লোরোজেনিক অ্যাসিড ও ক্যাফিক অ্যাসিড নামক অ্যান্টি-অক্সিডেন্ট, পটাশিয়াম, ম্যাগনেশিয়াম, আয়রন, ক্যালসিয়াম এবং দ্রবণীয়",
                "image" => null,
                "button" => [
                    "title" => "অর্ডার করতে চাই",
                    "url" => "#orderForm",
                    "color" => "#ffc100",
                    "text_color" => "#000000",
                    "border_color" => "#ffc100",
                    "hover_color" => "#ffc100",
                    "hover_text_color" => "#ffffff",
                    "hover_border_color" => "#ffc100"
                ],
                "bottom_description" => "সিড পুষ্টিকর খাবার। এতে আছে দুধের চেয়ে ৫ গুণ বেশি ক্যালসিয়াম, কমলার চেয়ে ৭ গুণ বেশি ভিটামিন সি, পালং শাকের চেয়ে ৩ গুণ বেশি আয়রন, কলার চেয়ে দ্বিগুণ পটাশিয়াম, মুরগির ডিম থেকে ৩ গুণ বেশি প্রোটিন, স্যামন মাছের চেয়ে ৮ গুণ বেশি ওমেগা-৩।",
                "bottom_button" => [
                    "title" => "অর্ডার করতে চাই",
                    "url" => "#orderForm",
                    "color" => "#ffc100",
                    "text_color" => "#000000",
                    "border_color" => "#ffc100",
                    "hover_color" => "#ffc100",
                    "hover_text_color" => "#ffffff",
                    "hover_border_color" => "#ffc100"
                ],
            ]),
            'features_area' => json_encode([
                "title" => "সিড খাওয়ার উপকারিতা",
                "image" => null,
                "background_color" => "#004111"
            ]),
            'about_area' => json_encode([
                "title" => "আমাদের উপর কেন আস্থা রাখবেন ??",
                "sub_title" => "প্রয়োজনে কল করুন- 01230 42 42 42 , 01234 56 78 90",
                "title_background_color" => "#004111",
                "sub_title_background_color" => "#004111",
            ]),
            'order_area' => json_encode([
                "title" => "“সিড“ নেয়ার জন্য, নিচের ফর্মটি সম্পূর্ণ পূরণ করুন",
                "background_color" => "#e8f5ed",
                "display_payment_option" => 1,
                "payment_title" => "Payment Type",
                "payment_sub_title" => "Cash On Delivery",
                "payment_tag" => "Cash On Delivery",
                "display_shipping_charge" => 1,
                "product_tag" => "400 g",
                "shipping_charge_text" => "Shipping Cost",
                "subtotal_text" => "Subtotal",
                "customer_name_text" => "নাম (Name)*",
                "customer_phone_text" => "মোবাইল নাম্বার (Mobile No)*",
                "delivery_address_text" => "ডেলিভারি ঠিকানা (Delivery Address)*",
                "image" => null,
                "button" => [
                    "title" => "Place Order",
                    "color" => "#dc3545",
                    "text_color" => "#ffffff",
                    "border_color" => "#dc3545",
                    "hover_color" => "#dc3545",
                    "hover_text_color" => "#000000",
                    "hover_border_color" => "#000000"
                ],
            ]),
            'footer_area' => json_encode([
                'title' => "01230 42 42 42",
                'color' => "#004111",
                'background_color' => "#86CD91",
            ]),
        ]);
        if ($request->fake_order > 0) {
            $faker = Faker::create();
            for ($i = 0; $i < $request->fake_order; $i++) {
                $price = $faker->randomFloat(2, 100, 1000);
                $quantity = $faker->numberBetween(1, 10);
                $discount = $price * ($faker->numberBetween(1, 10) / 100);
                $total = $price - $discount;

                DB::table('orders')->insert([
                    'user_template_id' => 1,
                    'customer_name' => $faker->name,
                    'customer_phone' => $faker->phoneNumber,
                    'customer_address' => $faker->address,
                    'product_name' => $faker->name,
                    'product_price' => $price,
                    'quantity' => $quantity,
                    'total_amount' => $total,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            return $request->fake_order . " orders placed successfully.";
        }

        abort(404);
    }
}
