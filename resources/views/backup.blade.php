<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\TeamController;

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
Route::post("/contact-form",[LandingPageController::class,'contactInfomation'])->name('contact.store');
Route::post("/email-form",[LandingPageController::class,'emailInfomation'])->name('email.store');

//landing page routes

Route::get('/email/unsubscribe', [PaymentController::class, 'unsubscribe'])->name('emails.unsubs');
Route::get('/payment/modes', [PaymentController::class, 'indexPay'])->name('payment.modes');
Route::get('/payments/options/{option}', [PaymentController::class, 'makePayments'])->name('make.payments');
Route::get('/unsubscribe', [PaymentController::class, 'unsubscribe'])->name('unsubscribe.emails');
Route::post('/unsubs/letter', [PaymentController::class, 'unsubscribeLetter'])->name('unsubscribe.store');


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

    //non resources
    Route::get('/users/crud/index', [UserController::class, 'userIndex'])->name('users.index');
    Route::get('/user/delete/{id}', [UserController::class, 'userDestroy'])->name('user.destroy');
    Route::get('/payment/status', [PaymentController::class, 'paymentStatus'])->name('status.payments');
    Route::post('/payment/verify', [PaymentController::class, 'verifyPayment'])->name('verify.payment');
    Route::get('/news-letters', [PaymentController::class, 'newsLetters'])->name('news.letters');
    Route::get('/send/letters', [PaymentController::class, 'createLetters'])->name('emails.create');
    Route::post('/store/letters', [PaymentController::class, 'storeLetters'])->name('email.send');

});







<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Friend;
use App\Models\Contact;
use App\Models\Letters;
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
        Mail::to('mytreeuganda@gmail.com')->send(new ContactMail($emailData));
        return redirect()->to('/#contact')->with('status', 'Email Sent Successfully');
    }

    public function emailInfomation(Request $request)
    {
        $news_letter = new Letters();
        $news_letter->email = $request->email;
        $news_letter->save();
        return redirect()->to('/#contact')->with('status', 'Subscribed Successfully');
    }

}





<!-- ? FOOTER -->
<section id="contact">
    <div class="container">
        <div class="row single-form g-0">
            <div class="col-sm-12 col-lg-6">
                <div class="left">
                    <h4>Contact us</h4><hr>
                    <div class="mt-4">
                        <div class="d-flex">
                            <i class="bi bi-geo-alt-fill"></i>
                            <p >Address: 198 West 21th Street, Suite 721 New York NY 10016</p>
                        </div><hr>
                        <div class="d-flex">
                            <i class="bi bi-telephone-fill"></i>
                            <p>Contact :- 8888888888</p>
                        </div><hr>
                        <div class="d-flex">
                            <i class="bi bi-envelope-fill"></i>
                            <p>Email:- Contact@gmail.com</p>
                        </div><hr>
                        <div class="d-flex">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-browser-chrome" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                </svg>
                            </i>
                            <p>Website: www.contact.com</p>
                        </div><hr>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="right">
                    <div class="rounded-lg max-w-xm">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('status'))
                            <p class="block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
                                {{ session('status') }}
                            </p>
                        @endif
                    </div>
                    <i class="fa fa-caret-left"></i>
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea type="text" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#message' ) )
                                .catch( error => {
                                    console.error( error );
                                });
                        </script>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End -->


<!-- Footer -->

<footer class="bg-white" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <a href="{{route('landing.index')}}">
                    <img src="/images/logo2.png" alt="" style="width: 180px;" class="mb-3">
                </a>
                <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
                <h6 class="text-uppercase font-weight-bold mb-4">Reports</h6>
                <p class="text-muted mb-2">Annual Reports, Financial Reports, Partner Reports</p>
                <a
                    href="#"
                    class="btn btn-brand text-uppercase"
                >Download Reports</a
                >
                <div class="accordion accordion-flush my-4"
                     id="accordionExample"  style="margin-left: -20px;">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed"
                                    type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo">
                                <p class="text-uppercase" style="font-weight: bold;">Important links</p>
                            </button>
                        </h2>

                        <div id="collapseTwo"
                             class="accordion-collapse collapse"
                             aria-labelledby="headingTwo"
                             data-bs-parent="#accordionExample"
                        >
                            <div class="accordion-body">
                                <a href="#">Donate</a><br>
                                <a href="#">Become a Member</a><br>
                                <a href="/">Friends of My Tree Donors Group</a><br>
                                <a href="{{route('landing.about')}}">Who we Are?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
                <h6 class="text-uppercase font-weight-bold mb-4">Our Newsletter</h6>
                <p id="emailHelp" class="text-muted mb-2">Subscribe to our newsletter to receive email updates from our team.</p>
                    @if(session('status'))
                        <p class="block w-full pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-left text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
                            {{ session('status') }}
                        </p>
                    @endif
                <form class="row g-2" method="POST" action="{{ route('email.store') }}">
                    @csrf
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email address" aria-label="Email address" aria-describedby="emailHelp">
                            <button class="btn btn-brand text-uppercase" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="footer-bg">
        <div class="container text-center">
            <p class="mb-0 py-2" id="yearPlaceholder">© <span id="currentYear"></span> My Tree Initiative All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- Jquery -->
<script src="./js/jquery.js"></script>
<!-- Bootstrap js -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
></script>
<!-- owl js -->
<script src="./js/owl.carousel.min.js"></script>
<!-- my own js -->
<script src="./js/app.js"></script>

<script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Update the content of the HTML element
    const currentYearPlaceholder = document.getElementById('currentYear');
    currentYearPlaceholder.textContent = currentYear;

    // Function to increment impact numbers
    function incrementToNumber(targetNumber, outputElementId, startingNumber) {
        const outputElement = document.getElementById(outputElementId);

        let currentNumber = startingNumber;
        const interval = setInterval(() => {
            // Format the current number with commas
            const formattedNumber = currentNumber.toLocaleString();

            outputElement.innerHTML = formattedNumber;
            if (currentNumber >= targetNumber) {
                clearInterval(interval); // Stop counting when the target is reached
            }
            currentNumber++;
        }, 10); // 1-second interval between increments
    }

    const tabs = document.querySelectorAll('.nav-link'); // Get all tab links

    // Create a function to handle tab activation and counting
    function activateAndCount(tabId) {
        // Deactivate all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Activate the specified tab
        const activeTab = document.querySelector(`[href="#${tabId}"]`);
        activeTab.classList.add('active');

        // Start counting when the tab's content is in view
        const contentElement = document.getElementById(tabId);
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    switch (tabId) {
                        case "schools":
                            incrementToNumber(780000, "schools-1", 779800);
                            incrementToNumber(235, "schools-2", 35);
                            incrementToNumber(710000, "schools-3", 709800);
                            break;
                        case "forests":
                            incrementToNumber(55000, "forests-1", 54800);
                            incrementToNumber(8, "forests-2", 0);
                            incrementToNumber(4147, "forests-3", 4000);
                            break;
                        case "roads":
                            incrementToNumber(176500, "roads-1", 176300);
                            incrementToNumber(18, "roads-2", 0);
                            incrementToNumber(13000, "roads-3", 12800);
                            break;
                        case "religion":
                            incrementToNumber(120000, "religion-1", 119800);
                            incrementToNumber(25, "religion-2", 0);
                            incrementToNumber(3100, "religion-3", 2900);
                            break;
                        default:
                            break;
                    }
                    observer.disconnect(); // Stop observing once counting has started
                }
            });
        });

        // Observe the content element
        observer.observe(contentElement);
    }

    tabs.forEach(tab => {
        tab.addEventListener('click', (event) => {
            event.preventDefault();
            const tabId = event.target.getAttribute('href').replace('#', '');
            activateAndCount(tabId);
        });
    });

    // Function to start counting for the "Schools" tab when it's in view
    function observeSchoolsTab() {
        const schoolsTabContent = document.getElementById("schools"); // Replace with the actual ID of the "Schools" tab content

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Start counting when the tab's content is in view
                    incrementToNumber(780000, "schools-1", 779800);
                    incrementToNumber(235, "schools-2", 35);
                    incrementToNumber(710000, "schools-3", 709800);
                    observer.disconnect(); // Stop observing once counting has started
                }
            });
        });

        // Observe the "Schools" tab content
        observer.observe(schoolsTabContent);
    }

    // Call the function to observe the "Schools" tab when needed
    observeSchoolsTab();

</script>
</body>
</html>
