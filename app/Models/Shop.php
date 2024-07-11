<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function to get user details
    public function user_details()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
