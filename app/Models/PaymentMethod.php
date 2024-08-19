<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['decoded_credentials'];

    public function getDecodedCredentialsAttribute()
    {
        return json_decode($this->credentials, true);
    }
}
