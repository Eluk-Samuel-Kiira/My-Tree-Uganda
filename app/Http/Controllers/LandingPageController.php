<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function welcomePage(){
        return view("landing_page.welcome");
    }
    public function aboutUsPage(){
        return view("landing_page.about");
    }
    public function friendsPage(){
        return view("landing_page.friends");
    }
}
