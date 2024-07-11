<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            'All module access',
            'Free bulk sms service',
            '24/7/365 days support'
        ];

        // create basic plan
        $package = new Package();
        $package->title = 'Basic Plan';
        $package->price = 1000;
        $package->duration = 30;
        $package->features = json_encode($features);
        $package->save();

        // create standard plan
        $package = new Package();
        $package->title = 'Standard Plan';
        $package->price = 3000;
        $package->duration = 120;
        $package->features = json_encode($features);
        $package->save();

        // create premium plan
        $package = new Package();
        $package->title = 'Premium Plan';
        $package->price = 10000;
        $package->duration = 365;
        $package->features = json_encode($features);
        $package->save();
    }
}
