<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Letters;
use App\Notifications\ContactMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Notifications\Notifiable;


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

    public function newsLetters()
    {
        $subscribers = Letters::all();
        return view('emails.index', compact('subscribers'));
    }

    public function createLetters()
    {
        return view('emails.create');
    }

    public function storeLetters(Request $request)
    {
        $user = Letters::whereNot('status', 0)->get();


        $sendNewsletter = [
            'body' => $request->input('message'),
            'headerText' => $request->input('subject'),
            'url' => url('/email/unsubscribe'),
            'thankYou' => 'Thank You',
        ];

        Notification::send($user, new ContactMail($sendNewsletter));

        return redirect()->route('news.letters')->with('status', 'Newsletters Shared Successfully');
    }

    public function unsubscribe()
    {
        return view('emails.unsubscribe');
    }

    public function unsubscribeLetter(Request $request)
    {
        {
            $subscriber = Letters::where('email', $request->email)->first();
            if($subscriber)
            {
                $subscriber->update(['status' => 0]); // Use 'status' => 0  for unsubscribe               
                return back()->with('status', 'You have Unsubscribed Successfully');
            }else {
                return back()->with('status', 'No Email Found');
            }
        }
    }

    public function activateUser(Request $request)
    {
        $user = User::where('id',$request->id)->first();
        if($user->status ==0)
        {
            $user->update(['status' => 1]);
            return redirect()->back()->with('status', 'The User Has Been Activated Successfully');
        } else
        {
            $user->update(['status' => 0]);
            return redirect()->back()->with('status', 'The User Has Been Deactivated Successfully');
        }
    }
}
