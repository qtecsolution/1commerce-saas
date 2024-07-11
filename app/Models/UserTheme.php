<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTheme extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function to get theme elements
    public function theme_elements()
    {
        return $this->belongsTo(UserThemeElement::class, 'id', 'user_theme_id',);
    }

    // function to get user shop details.
    public function shop_details()
    {
        return $this->belongsTo(Shop::class, 'user_id', 'user_id');
    }
}
