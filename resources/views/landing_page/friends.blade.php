<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap cdn -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <!-- others in css folder -->
    <link rel="stylesheet" href="./css/boxicons.min.css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
    <!-- own css -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Our Friends</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
<!-- ? TOP NAVBAR -->
<nav class="top-nav" id="home">
    <div class="container">
        <div class="row justify-content-md-between">
            <div class="col-md-auto mb-2 mb-md-0">
                <p>
                    <i class="bx bxs-envelope"></i>
                    <span>mytreeuganda@gmail.com</span>
                </p>
                <p>
                    <i class="bx bxs-phone-call"></i>
                    <span>+256 760415446</span>
                </p>
            </div>
            <div class="col-md-auto mb-2 mb-md-0">
                <div class="social-links">
                    <a href="#"><i class="bx bxl-facebook"></i></a>
                    <a href="#"><i class="bx bxl-twitter"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!--? MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route('landing.index')}}">
            <img src="/images/logo2.png" alt="logo" class="img-logo">
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div
            class="collapse navbar-collapse"
            id="navbarNav"
            data-toggle="collapse"
            data-target=".navbar-collapse"
        >
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('landing.index')}}">Back</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            <a
                href="#"
                class="btn btn-brand ms-lg-3"
            >Donate</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-brand-2 ms-lg-3">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-brand-2 ms-lg-3">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-brand-2 ms-lg-3">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>
<!--MAIN NAVBAR -->

<!--Our friends-->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1 style="margin-top: 20px;">Friends of My Tree Initiative</h1>
            <p>
                Welcome to the Friends of My Tree Donors Group, where your annual membership donations  play a pivotal role in supporting our operational expenses. By becoming an annual member, you become an integral part of our mission to protect and preserve trees. Your contributions directly fuel our efforts to make the world greener. In return, enjoy a range of exclusive benefits that deepen your connection to nature and our community. Join us today and make a lasting impact while enjoying the rewards of being a Friend of My Tree.
            </p>
            <a href="#" class="btn btn-brand btn-brand-2 my-3 p-3">Become a Friend</a>
        </div>
    </div>
    @if(count($friends) > 0)
        @foreach($friends as $friend)

            <div class="card my-4 friend-card">
                <div class="row no-gutters d-flex align-items-center">
                    <!-- Image on the left for desktop -->
                    <div class="col-md-4 col-img">
                        <div class="image-container">
                            <img src="{{asset('storage/Friends/'.$friend->image)}}" class="card-img" alt="Image">
                        </div>
                    </div>
                    <!-- Content on the right for desktop -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$friend->name}}
                            </h5>
                            <h6 class="text-muted">{{$friend->title}}</h6>
                            <div class="card-text">
                                <p>
                                    {!! $friend->message !!}
                                </p>
                                <!-- Add more content as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

<div class="d-flex justify-content-center mx-5">
    {{ $friends->links('pagination::bootstrap-5') }}
</div>
<!--Our friends-->

<!-- ? FOOTER -->
@include("layouts.contact_footer")
<!-- FOOTER -->

<!-- button -->

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
    const currentYear = new Date().getFullYear();

    // Update the content of the HTML element
    const currentYearPlaceholder = document.getElementById('currentYear');
    currentYearPlaceholder.textContent = currentYear;
</script>

</body>
</html>
