<?php

namespace App\Models\Template;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UlaunchTemplate extends Model
{
    use HasFactory;

    public $templateId = 1;

    protected $guarded = [];

    public function steps()
    {
        return $this->hasMany(TemplateStep::class, 'user_id', 'user_id')
            ->where('template_id', $this->templateId);
    }

    public function features()
    {
        return $this->hasMany(TemplateFeature::class, 'user_id', 'user_id')
            ->where('template_id', $this->templateId);
    }
}
