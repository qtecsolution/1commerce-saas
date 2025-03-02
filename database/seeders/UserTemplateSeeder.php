<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Http\Controllers\Template\CycleTemplateController;
use App\Http\Controllers\Template\SeedeeTemplateController;
use App\Http\Controllers\Template\UlaunchTemplateController;

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
            //for ulaunch template
            [
                'template_id' => 1, // Make sure this ID exists in the templates table
                'user_id' => 2, // Make sure this ID exists in the users table
                'company_name' => 'Example Company Ltd.',
                'company_slug' => Str::slug('Example Company 1'),
                'fav_icon' => 'favicon.ico',
                'company_logo' => null,
                'product_name' => 'Example Product',
                'shipping_cost_inside_dhaka' => 100.00,
                'shipping_cost_outside_dhaka' => 200.00,
                'product_price' => 15000.00,
                'product_currency' => 'BDT',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //for seedee template
            [
                'template_id' => 2, // Make sure this ID exists in the templates table
                'user_id' => 2, // Make sure this ID exists in the users table
                'company_name' => 'Example Company Ltd.',
                'company_slug' => Str::slug('Example Company 2'),
                'fav_icon' => 'favicon.ico',
                'company_logo' => null,
                'product_name' => 'Example Product',
                'shipping_cost_inside_dhaka' => 100.00,
                'shipping_cost_outside_dhaka' => 200.00,
                'product_price' => 15000.00,
                'product_currency' => 'BDT',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            //for cycle template
            [
                'template_id' => 3, // Make sure this ID exists in the templates table
                'user_id' => 2, // Make sure this ID exists in the users table
                'company_name' => 'Example Company Ltd.',
                'company_slug' => Str::slug('Example Company 3'),
                'fav_icon' => 'favicon.ico',
                'company_logo' => null,
                'product_name' => 'Bi Cycle',
                'shipping_cost_inside_dhaka' => 100.00,
                'shipping_cost_outside_dhaka' => 200.00,
                'product_price' => 15000.00,
                'product_currency' => 'BDT',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
        //for cycle template insert demo data in created user_template
        $cycle = new CycleTemplateController();
        $cycle->initialSetup(2);

        //for seedee template insert demo data in created user_template
        $seedee = new SeedeeTemplateController();
        $seedee->initialSetup(2);

        //for ulaunch template insert demo data in created user_template
        $ulaunch = new UlaunchTemplateController();
        $ulaunch->initialSetup(2);
    }
}
