<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function to customer details
    public function customerDetails()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // function to get order products
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
