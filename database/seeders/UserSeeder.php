<?php

namespace Database\Seeders;

use App\Models\Subscription;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create default admin user
        $user = new User();
        $user->name = 'Mr Admin';
        $user->username = 'admin@email.com';
        $user->phone = '01234567890';
        $user->email = 'admin@email.com';
        $user->password = bcrypt('pa$$word');
        $user->is_admin = 1;
        $user->save();

        // create default customer user
        $user = new User();
        $user->name = 'Mr Customer';
        $user->username = 'customer@email.com';
        $user->phone = '01234567891';
        $user->email = 'customer@email.com';
        $user->password = bcrypt('pa$$word');
        $user->is_admin = 0;
        $user->save();

        // create subscription for customer
        $subscription = new Subscription();
        $subscription->user_id = 2;
        $subscription->package_id = 3;
        $subscription->starting_date = date('Y-m-d', strtotime('-5 days'));
        $subscription->ending_date = date('Y-m-d', strtotime($subscription->starting_date . '+30 days'));
        $subscription->is_paid = 1;
        $subscription->save();
    }
}
