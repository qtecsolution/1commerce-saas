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
        Template::create([
            'name' => 'ULaunch',
            'slug' => 'ulaunch',
            'assets_path' => 'ULaunch',
            'blade_path' => 'ulaunch'
        ]);
        Template::create([
            'name' => 'Seedee',
            'slug' => 'seedee',
            'assets_path' => 'seedee',
            'blade_path' => 'seedee'
        ]);
    }
}
