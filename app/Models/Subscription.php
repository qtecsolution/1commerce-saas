<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    // function to get package details
    public function package_details()
    {
        return $this->belongsTo(Package::class, 'package_id', 'id');
    }
}
