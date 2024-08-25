<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderPayment;
use App\Models\OrderDynamicField;
use App\Models\Template\UserTemplate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function payments()
    {
        return $this->hasMany(OrderPayment::class);
    }
}
