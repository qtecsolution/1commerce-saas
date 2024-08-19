<?php

namespace App\Models\Template;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderFormAdditionalField;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTemplate extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['ssl_commerz'];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function fields()
    {
        return $this->hasMany(OrderFormAdditionalField::class);
    }

    public function paymentMethods()
    {
        return $this->hasMany(PaymentMethod::class);
    }

    public function getSSLCommerzAttribute()
    {
        return $this->paymentMethods()->where('payment_method', 'ssl_commerz')->first();
    }
}
