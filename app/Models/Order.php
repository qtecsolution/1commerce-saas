<?php

namespace App\Models;

use App\Models\Template\UserTemplate;
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

    public function userTemplate()
    {
        return $this->belongsTo(UserTemplate::class);
    }

    public function dynamicFields()
    {
        return $this->hasMany(OrderDynamicField::class);
    }
}
