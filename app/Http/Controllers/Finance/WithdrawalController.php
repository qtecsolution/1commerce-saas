<?php

namespace App\Http\Controllers\Finance;

use App\Models\Withdraw;
use App\Models\UserWallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class WithdrawalController extends Controller
{
    public function index()
    {
        $withdrawals = Withdraw::latest()->paginate(10);
        return view('admin.finance.withdraw.index', compact('withdrawals'));
    }

    public function show($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        return view('admin.finance.withdraw.details', compact('withdraw'));
    }

    public function approveReject(Request $request, $id)
    {
        $withdraw = Withdraw::findOrFail($id);
        if ($withdraw->status != 0) {
            toast('Withdrawal status already updated.', 'warning');
            return back();
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'status' => 'required',
                'remarks' => 'required',
            ]);
            DB::beginTransaction();
            // try {
                $withdraw->status = $request->status;
                $withdraw->payment_reference = $request->remarks;
                $withdraw->save();

                if ($request->status == 2) {
                    $userWallet = UserWallet::find($withdraw->user_wallet_id);
                    $userWallet->balance += $withdraw->amount;
                    $userWallet->save();

                    Transaction::create([
                        'user_id' => $userWallet->user_id,
                        'debit' => $withdraw->amount,
                        'balance' => $userWallet->balance,
                        'reference_id' => $withdraw->id,
                        'purpose' => "Withdrawal Refund",
                    ]);
                }

                DB::commit();
                toast('Withdrawal status updated.', 'success');
                return back();
            // } catch (\Throwable $th) {
            //     DB::rollBack();
            //     toast('Something went wrong.', 'error');
            //     return back();
            // }
        }

        return view('admin.finance.withdraw.approve-reject', compact('withdraw'));
    }
}
