<?php

namespace App\Http\Controllers\Test;

use App\Models\PosCart;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Template\UlaunchTemplate;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

class TestController extends Controller
{
    // function to test
    public function index(Request $request)
    {
        UlaunchTemplate::create([
            'user_id' => 3,
            'status' => 1,
            'menu_area' => json_encode([
                ["title" => "Home", "url" => "#home"],
                ["title" => "Features", "url" => "#features"],
                ["title" => "About", "url" => "#about"],
                ["title" => "Testimonials", "url" => "#testimonials"],
                ["title" => "Order", "url" => "#order"]
            ]),
            'hero_area' => json_encode([
                "title" => "Best quality smart watch only at Tk 2000.",
                "description" => "Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.",
                "image" => null,
                "button" => [
                    "title" => "Product Details",
                    "url" => "#features",
                    "color" => "transparent",
                    "text_color" => "white",
                    "border_color" => "white",
                    "hover_color" => "white",
                    "hover_text_color" => "black",
                    "hover_border_color" => "white"
                ],
                "background_color" => "#20bea7"
            ]),
            'features_area' => json_encode([
                "title" => "Product Features",
                "sub_title" => "Explore the awesome",
                "image" => null,
                "background_color" => "#f7f7f7"
            ]),
            'about_area' => json_encode([
                "title" => "About Product",
                "sub_title" => "BEAUTY MEETS FUNCTIONALITY",
                "background_color" => "#ffffff",
                "items" => [
                    [
                        "title" => "Different preset Signup & Order forms ready to use.",
                        "sub_title" => "FRESH NEWS FROM THE LABS",
                        "description" => "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                        "button" => [
                            "title" => "Purchase Now",
                            "url" => "#order",
                            "color" => "transparent",
                            "text_color" => "#20bea7",
                            "border_color" => "#20bea7",
                            "hover_color" => "#20bea7",
                            "hover_text_color" => "white",
                            "hover_border_color" => "#20bea7"
                        ],
                        "image" => null,
                        "image_raw" => null
                    ],
                    [
                        "title" => "Different preset Signup & Order forms ready to use.",
                        "sub_title" => "FRESH NEWS FROM THE LABS",
                        "description" => "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                        "button" => [
                            "title" => "Purchase Now",
                            "url" => "#order",
                            "color" => "transparent",
                            "text_color" => "#20bea7",
                            "border_color" => "#20bea7",
                            "hover_color" => "#20bea7",
                            "hover_text_color" => "white",
                            "hover_border_color" => "#20bea7"
                        ],
                        "image" => null,
                        "image_raw" => null
                    ]
                ]
            ]),
            'testimonials_area' => json_encode([
                "title" => "What our clients say",
                "sub_title" => "FEEDBACK",
                "background_color" => "#20bea7"
            ]),
            'info_area' => json_encode([
                "title" => "Get your Product today!",
                "sub_title" => "GET IT TODAY",
                "description" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
                "button" => [
                    "title" => "Purchase Now",
                    "url" => "#order",
                    "color" => "transparent",
                    "text_color" => "#20bea7",
                    "border_color" => "#20bea7",
                    "hover_color" => "#20bea7",
                    "hover_text_color" => "white",
                    "hover_border_color" => "#20bea7"
                ],
                "video_url" => null,
                "background_color" => "#f7f7f7"
            ]),
            'order_area' => json_encode([
                "title" => "Order Now",
                "sub_title" => "GET YOUR PRODUCT",
                "background_color" => "#ffffff"
            ]),
            'footer_area' => json_encode([
                "text" => "Copyright © 2024, All Rights Reserved.",
                "background_color" => "#263238"
            ])
        ]);
        dd('done');
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
