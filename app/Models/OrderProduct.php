<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function to get product details 
    public function productDetails()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
