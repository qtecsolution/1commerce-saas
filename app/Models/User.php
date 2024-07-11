<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
        'nid_number'
    ];

    // function to get user subscription details.
    public function subscription_details()
    {
        return $this->belongsTo(Subscription::class, 'id', 'user_id');
    }

    // function to get user shop details.
    public function shop_details()
    {
        return $this->belongsTo(Shop::class, 'id', 'user_id');
    }
}
