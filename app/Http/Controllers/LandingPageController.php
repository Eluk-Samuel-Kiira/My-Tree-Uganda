<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Friend;

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
}
