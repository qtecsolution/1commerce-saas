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
        abort(404);

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
