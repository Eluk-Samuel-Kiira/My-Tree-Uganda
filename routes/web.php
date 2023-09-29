<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//landing page routes
Route::get("/",[LandingPageController::class,'welcomePage'])->name('landing.index');
Route::get("/friends",[LandingPageController::class,'friendsPage'])->name('landing.friends');
Route::get("/about",[LandingPageController::class,'aboutUsPage'])->name('landing.about');
Route::get("/Banks",[LandingPageController::class,'banksPage'])->name('landing.banks');
Route::get("/Law Firms",[LandingPageController::class,'lawFirmsPage'])->name('landing.law_firms');
Route::get("/Hotels",[LandingPageController::class,'hotelsPage'])->name('landing.hotels');
Route::get("/Hospitals",[LandingPageController::class,'hospitalsPage'])->name('landing.hospitals');
Route::get("/Golf Clubs",[LandingPageController::class,'golfClubsPage'])->name('landing.golf_clubs');
Route::get("/International Agencies",[LandingPageController::class,'internationalAgenciesPage'])->name('landing.international_agencies');
Route::get("/Government Agencies",[LandingPageController::class,'governmentAgenciesPage'])->name('landing.government_agencies');
Route::get("/Insurance Companies",[LandingPageController::class,'insuranceCompaniesPage'])->name('landing.insurance_companies');
Route::get("/Media Companies",[LandingPageController::class,'mediaCompaniesPage'])->name('landing.media_companies');
Route::post("/contact-form",[LandingPageController::class,'contactInfomation'])->name('contact.store');
Route::post("/email-form",[LandingPageController::class,'emailInfomation'])->name('email.store');

//landing page routes

Route::get('/payment/modes', [PaymentController::class, 'indexPay'])->name('payment.modes');
Route::get('/payments/options/{option}', [PaymentController::class, 'makePayments'])->name('make.payments');
Route::get('/unsubscribe', [PaymentController::class, 'unsubscribe'])->name('unsubscribe.emails');
Route::post('/unsubs/letter', [PaymentController::class, 'unsubscribeLetter'])->name('unsubscribe.store');
Route::get('/email/unsubscribe', [PaymentController::class, 'unsubscribe'])->name('emails.unsubs');


Route::get('/account/modes', [UserController::class, 'accountStatus'])->name('account.modes');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('resource', ResourceController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('friend', FriendController::class);
    Route::resource('team', TeamController::class);
    Route::resource('partner', PartnerController::class);

    //non resources
    Route::get('/users/crud/index', [UserController::class, 'userIndex'])->name('users.index');
    Route::get('/user/delete/{id}', [UserController::class, 'userDestroy'])->name('user.destroy');
    Route::get('/payment/status', [PaymentController::class, 'paymentStatus'])->name('status.payments');
    Route::post('/payment/verify', [PaymentController::class, 'verifyPayment'])->name('verify.payment');
    Route::get('/news-letters', [PaymentController::class, 'newsLetters'])->name('news.letters');
    Route::get('/send/letters', [PaymentController::class, 'createLetters'])->name('emails.create');
    Route::post('/store/letters', [PaymentController::class, 'storeLetters'])->name('email.send');


    Route::get('/activate/user/{id}', [PaymentController::class, 'activateUser'])->name('user.paid');

});
