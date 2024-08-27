<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function features()
    {
        return $this->hasMany(TemplateFeature::class);
    }

    public function testimonials()
    {
        return $this->hasMany(TemplateTestimonial::class);
    }
}
