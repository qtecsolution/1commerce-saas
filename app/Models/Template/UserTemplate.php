<?php

namespace App\Models\Template;

use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderFormAdditionalField;
use App\Models\TemplateSeoTag;
use App\Models\TrackingApi;
use App\Models\UserWallet;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTemplate extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $appends = ['ssl_commerz', 'aamar_pay', 'one_wallet'];

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
        return $this->paymentMethods()->where('name', 'ssl_commerz')->first();
    }

    public function getAamarPayAttribute()
    {
        return $this->paymentMethods()->where('name', 'aamar_pay')->first();
    }

    public function getOneWalletAttribute()
    {
        return $this->paymentMethods()->where('name', 'one_wallet')->first();
    }

    public function userWallet()
    {
        return $this->hasOne(UserWallet::class, 'user_id', 'user_id');
    }

    public function trackingApi()
    {
        return $this->belongsTo(TrackingApi::class, 'id', 'user_template_id');
    }

    public function seoTags()
    {
        return $this->belongsTo(TemplateSeoTag::class, 'id', 'user_template_id');
    }
}
