<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Template\CycleTemplateController;

class UserTemplateSeeder extends Seeder
{ 
    /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
    DB::table('user_templates')->insert([
        //for cycle template
        [
            'template_id' => 3, // Make sure this ID exists in the templates table
            'user_id' => 2, // Make sure this ID exists in the users table
            'company_name' => 'Example Company Ltd.',
            'company_slug' => Str::slug('Example Company'),
            'fav_icon' => 'favicon.ico',
            'company_logo' => 'logo.png',
            'product_name' => 'Example Product',
            'shipping_cost_inside_dhaka' => 100.00,
            'shipping_cost_outside_dhaka' => 200.00,
            'product_price' => 15000.00,
            'product_currency' => 'BDT',
            'status' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        // Add more rows as needed
    ]);
    //for cycle template insert demo data in created user_template
    $cycle = new CycleTemplateController();
    $cycle->initialSetup(2);
   }
}
