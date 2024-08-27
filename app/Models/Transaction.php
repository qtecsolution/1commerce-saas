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
        if ($this->attributes['purpose'] == 'Order Payment') {
            return $this->belongsTo(OrderPayment::class, 'reference_id', 'id');
        }

        return $this->belongsTo(User::class)->where('id', 0);
    }

    public function withdrawal()
    {
        if ($this->attributes['purpose'] == 'Withdrawal' || $this->attributes['purpose'] == 'Withdrawal Refund') {
            return $this->belongsTo(Withdraw::class, 'reference_id', 'id');
        }

        return $this->belongsTo(User::class)->where('id', 0);
    }
}
