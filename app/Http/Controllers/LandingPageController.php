<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Friend;
use App\Models\Contact;
use App\Models\Partner;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class LandingPageController extends Controller
{
    public function welcomePage(){
        $galleries = Gallery::whereNot('deleted', 1)->latest()->take(8)->get();
        $friends = Friend::where('deleted','!=', 1)->latest()->take(4)->get();
        $team = Team::where('deleted','!=',1)->latest()->take(4)->get();
        $bank = Partner::where('deleted','!=',1)->where('category','Banks')->latest()->first();
        $hotel = Partner::where('deleted','!=',1)->where('category','Hotels')->latest()->first();
        $law_firm = Partner::where('deleted','!=',1)->where('category','Law Firms')->latest()->first();
        $insurance_company = Partner::where('deleted','!=',1)->where('category','Insurance Companies')->latest()->first();
        $hospital = Partner::where('deleted','!=',1)->where('category','Hospitals')->latest()->first();
        $golf_club = Partner::where('deleted','!=',1)->where('category','Golf Clubs')->latest()->first();
        $media_company = Partner::where('deleted','!=',1)->where('category','Media Companies')->latest()->first();
        $international_agency = Partner::where('deleted','!=',1)->where('category','International Agencies')->latest()->first();
        $government_agency = Partner::where('deleted','!=',1)->where('category','Government Agencies')->latest()->first();
        return view("landing_page.welcome",[
            'galleries'=>$galleries,
            'friends'=>$friends,
            'team'=>$team,
            'bank'=>$bank,
            'hotel'=>$hotel,
            'law_firm'=>$law_firm,
            'insurance_company'=>$insurance_company,
            'hospital'=>$hospital,
            'golf_club'=>$golf_club,
            'media_company'=>$media_company,
            'international_agency'=>$international_agency,
            'government_agency'=>$government_agency,
        ]);
    }
    public function aboutUsPage(){
        return view("landing_page.about");
    }
    public function friendsPage(Request $request)
    {
        $friends = Friend::where('deleted','!=', 1)->paginate(5);
        return view("landing_page.friends", compact('friends'));
    }

    public function banksPage()
    {
        $banks = Partner::where('deleted', '!=', 1)
            ->where('category', 'Banks')
            ->paginate(5);

        return view("landing_page.banks", compact('banks'));
    }

    public function hospitalsPage()
    {
        $hospitals = Partner::where('deleted', '!=', 1)
            ->where('category', 'Hospitals')
            ->paginate(5);

        return view("landing_page.hospitals", compact('hospitals'));
    }

    public function hotelsPage()
    {
        $hotels = Partner::where('deleted', '!=', 1)
            ->where('category', 'Hotels')
            ->paginate(5);

        return view("landing_page.hotels", compact('hotels'));
    }

    public function golfClubsPage()
    {
        $golf_clubs = Partner::where('deleted', '!=', 1)
            ->where('category', 'Golf Clubs')
            ->paginate(5);

        return view("landing_page.golf_clubs", compact('golf_clubs'));
    }

    public function governmentAgenciesPage()
    {
        $government_agencies = Partner::where('deleted', '!=', 1)
            ->where('category', 'Government Agencies')
            ->paginate(5);

        return view("landing_page.government_agencies", compact('government_agencies'));
    }

    public function internationalAgenciesPage()
    {
        $international_agencies = Partner::where('deleted', '!=', 1)
            ->where('category', 'International Agencies')
            ->paginate(5);

        return view("landing_page.international_agencies", compact('international_agencies'));
    }

    public function lawFirmsPage()
    {
        $law_firms = Partner::where('deleted', '!=', 1)
            ->where('category', 'Law Firms')
            ->paginate(5);

        return view("landing_page.law_firms", compact('law_firms'));
    }

    public function insuranceCompaniesPage()
    {
        $insurance_companies = Partner::where('deleted', '!=', 1)
            ->where('category', 'Insurance Companies')
            ->paginate(5);

        return view("landing_page.insurance_companies", compact('insurance_companies'));
    }
    public function mediaCompaniesPage()
    {
        $media_companies = Partner::where('deleted', '!=', 1)
            ->where('category', 'Media Companies')
            ->paginate(5);

        return view("landing_page.media_companies", compact('media_companies'));
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
