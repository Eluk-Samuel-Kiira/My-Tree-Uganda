<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Friend;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class LandingPageController extends Controller
{
    public function welcomePage(){
        $galleries = Gallery::whereNot('deleted', 1)->latest()->take(8)->get();
        $friends = Friend::whereNot('deleted', 1)->latest()->take(8)->get();
        return view("landing_page.welcome", compact('galleries','friends'));
    }
    public function aboutUsPage(){
        return view("landing_page.about");
    }
    public function friendsPage(Request $request)
    {
        $one_friend = Friend::whereNot('deleted', 1)->where('name', $request->name)->first();
        return view("landing_page.friends", compact('one_friend'));
    }

    public function contactInfomation(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:2000',
        ];
    
        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
    
        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->to('/#contact')->withErrors($validator)->withInput();
        }
    
        // Validation passed, save the contact
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        
        // Call the email functionality
        $emailData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
        Mail::to('ashrafenjer1@gmail.com')->send(new ContactMail($emailData));

        return redirect()->to('/#contact')->with('status', 'Email Sent Successfully');
    }

}
