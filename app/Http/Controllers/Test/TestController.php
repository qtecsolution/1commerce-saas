<?php

namespace App\Http\Controllers\Test;

use App\Models\PosCart;
use Illuminate\Http\Request;
use App\Models\SupportTicket;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

class TestController extends Controller
{
    // function to test
    public function index(Request $request)
    {
        if ($request->fake_order > 0) {
            $faker = Faker::create();
            for ($i = 0; $i < $request->fake_order; $i++) {
                $price = $faker->randomFloat(2, 100, 1000);
                $quantity = $faker->numberBetween(1, 10);
                $discount = $price * ($faker->numberBetween(1, 10) / 100);
                $total = $price - $discount;

                DB::table('orders')->insert([
                    'user_id' => auth()->id(),
                    'order_prefix' => strtoupper($faker->lexify('ORD')),
                    'order_code' => $faker->unique()->numberBetween(1000, 9999),
                    'customer_name' => $faker->name,
                    'customer_phone' => $faker->phoneNumber,
                    'customer_email' => $faker->safeEmail,
                    'customer_address' => $faker->address,
                    'price' => $price,
                    'quantity' => $quantity,
                    'discount_amount' => $discount,
                    'total_amount' => $total,
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            return $request->fake_order . " order placed";
        }
        abort(404);

        // return response()->json([
        //     'message' => 'Hello World',
        // ], 500);

        $userName = Auth::user()->name;
        $explodedName = explode(' ', $userName);
        return $explodedName[count($explodedName) - 1];
    }
}
