<?php

namespace App\Models\Template;

use App\Models\OrderFormAdditionalField;
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
}
