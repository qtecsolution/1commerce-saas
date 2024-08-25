<?php

namespace App\Http\Controllers\User\Finance;

use App\Models\UserWallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{

    public function createOneWallet(Request $request)
    {
        UserWallet::updateOrCreate(
            [
                'user_id' => auth()->id(),
            ],
            [
                'security_code' => $request->security_code ?? rand(10000, 99999),
                'status' => $request->status ?? 1
            ]
        );

        toast('Wallet setup successful.', 'success');
        return back();
    }

    public function myWallet()
    {
        $userWallet = UserWallet::where('user_id', auth()->id())->first();
        return view('customer.finance.my-wallet', compact('userWallet'));
    }

    public function transactionHistory(Request $request)
    {
        $transactions = Transaction::where('user_id', auth()->id())->latest()->paginate(10);
        return view('customer.finance.transaction-history', compact('transactions'));
    }

    public function withdrawHistory(Request $request)
    {
        abort(404);
    }
}
