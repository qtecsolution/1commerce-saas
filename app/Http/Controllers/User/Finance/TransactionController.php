<?php

namespace App\Http\Controllers\User\Finance;

use App\Models\UserWallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function debitTransaction($user_wallet_id, $payment)
    {
        $userWallet = UserWallet::find($user_wallet_id);
        $userWallet->balance += $payment->amount;
        $userWallet->save();

        Transaction::create([
            'user_id' => $userWallet->user_id,
            'debit' => $payment->amount,
            'balance' => $userWallet->balance,
            'reference_id' => $payment->id,
            'purpose' => "Order Payment",
        ]);

        return $userWallet;
    }

    public function creditTransaction($user_wallet_id, $withdraw)
    {
        $userWallet = UserWallet::find($user_wallet_id);
        $userWallet->balance -= $withdraw->amount;
        $userWallet->save();

        Transaction::create([
            'user_id' => $userWallet->user_id,
            'credit' => $withdraw->amount,
            'balance' => $userWallet->balance,
            'reference_id' => $withdraw->id,
            'purpose' => "Withdrawal",
        ]);

        return $userWallet;
    }
}
