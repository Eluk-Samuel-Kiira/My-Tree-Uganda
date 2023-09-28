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

<footer class="bg-white">
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
                <form class="row g-2">
                    <div class="col-md-8">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" aria-label="Email address" aria-describedby="emailHelp">
                            <button class="btn btn-brand text-uppercase" type="button">Subscribe</button>
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
