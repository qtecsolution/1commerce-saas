<?php

namespace App\Http\Controllers\User\Finance;

use App\Models\UserWallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WalletController extends Controller
{
    protected $chargePercent = 5;

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

    public function withdraw(Request $request)
    {
        $userWallet = UserWallet::where('user_id', auth()->id())->first();
        if ($request->isMethod('post')) {
            dd($request->all(), $userWallet);
        }

        $chargePercent = $this->chargePercent;
        return view('customer.finance.withdraw', compact('userWallet', 'chargePercent'));
    }

    public function withdrawHistory(Request $request)
    {
        abort(404);
    }
}
