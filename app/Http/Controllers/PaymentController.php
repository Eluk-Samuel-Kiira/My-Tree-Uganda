<?php

namespace App\Http\Controllers;

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
}
