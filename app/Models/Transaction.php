<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function payment()
    {
        return $this->belongsTo(OrderPayment::class, 'reference_id', 'id');
    }

    public function withdrawal()
    {
        return $this->belongsTo(Withdraw::class, 'reference_id', 'id');
    }
}
