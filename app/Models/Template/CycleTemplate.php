<?php


namespace App\Models\Template;

use App\Models\Template\TemplateStep;
use Illuminate\Database\Eloquent\Model;
use App\Models\Template\TemplateFeature;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CycleTemplate extends Model
{
    use HasFactory;
    public $templateId = 3;

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
