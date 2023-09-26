<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\FriendController;

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
Route::get("/friends/{name}",[LandingPageController::class,'friendsPage'])->name('landing.friends');
Route::get("/about",[LandingPageController::class,'aboutUsPage'])->name('landing.about');

//landing page routes

Route::get('/payment/modes', [PaymentController::class, 'indexPay'])->name('payment.modes');
Route::get('/payments/options/{option}', [PaymentController::class, 'makePayments'])->name('make.payments');


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

    //non resources
    Route::get('/users/crud/index', [UserController::class, 'userIndex'])->name('users.index');
    Route::get('/user/delete/{id}', [UserController::class, 'userDestroy'])->name('user.destroy');
    Route::get('/payment/status', [PaymentController::class, 'paymentStatus'])->name('status.payments');
    Route::post('/payment/verify', [PaymentController::class, 'verifyPayment'])->name('verify.payment');



});
