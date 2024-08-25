<?php

namespace App\Models;

use App\Models\Template\UserTemplate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomDomain extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function userTemplate()
    {
        return $this->belongsTo(UserTemplate::class);
    }
}
