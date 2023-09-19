<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\User;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function indexPay()
    {
        return view('payments.methods');
    }

    public function makePayments(Request $request)
    {
        $pay_option = $request->option;
        return view('payments.confirmpay', compact('pay_option'));
    }

    public function paymentStatus()
    {
        return view('payments.paystatus');
    }

    public function verifyPayment(Request $request)
    {
        $transactions = Transaction::where('tx_ref', $request->tx_ref)->first();
        if ($transactions) {
            $user = User::find($request->user_id);
            if ($user) {
                $user->update(['status' => 1]);
            }
        }
        return redirect()->route('dashboard')->with('status', 'Payment Successful, Enjoy the Dashbord');

    }
}
