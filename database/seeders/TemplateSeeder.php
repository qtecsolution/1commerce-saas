<?php

namespace Database\Seeders;

use App\Models\Template\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Template::where('id', 1)->exists()) {
            Template::create([
                'name' => 'ULaunch',
                'slug' => 'ulaunch',
                'assets_path' => 'ULaunch',
                'blade_path' => 'ulaunch'
            ]);
        }
        if (!Template::where('id', 2)->exists()) {
            Template::create([
                'name' => 'Seedee',
                'slug' => 'seedee',
                'assets_path' => 'Seedee',
                'blade_path' => 'seedee'
            ]);
        }
        if (!Template::where('id', 3)->exists()) {
            Template::create([
                'name' => 'Cycle',
                'slug' => 'cycle',
                'assets_path' => 'cycle',
                'blade_path' => 'cycle'
            ]);
        }
        if (!Template::where('id', 5)->exists()) {
            Template::create([
                'name' => 'Cosmetic',
                'slug' => 'cosmetic',
                'assets_path' => 'cosmetic',
                'blade_path' => 'cosmetic'
            ]);
        }
    }
}
