<?php

namespace App\Models\Template;

use App\Models\OrderFormAdditionalField;
use App\Models\TrackingApi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTemplate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function fields()
    {
        return $this->hasMany(OrderFormAdditionalField::class);
    }

    public function trackingApi()
    {
        return $this->belongsTo(TrackingApi::class, 'id', 'user_template_id');
    }
}
