<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    use HasFactory;

    public static $templates = [
        [
            'id' => 1,
            'slug' => 'ulaunch',
            'name' => 'ULaunch',
            'assets' => 'ULaunch',
            'blade' => 'ulaunch',
        ]
    ];

    protected $guarded = [];
}
