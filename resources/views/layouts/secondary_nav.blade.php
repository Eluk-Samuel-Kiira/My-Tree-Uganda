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
                    <span>+256-760-415446 / +256-754754759</span>
                </p>
                <p>
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Kisasi, Kyanja Road, Kampala, Uganda</span>
                </p>
            </div>
            <div class="col-md-auto mb-2 mb-md-0">
                <div class="social-links">
                    <a href="https://m.facebook.com/MY-TREE-initiative-125019115558666/?ref=bookmarks" target="_blank" rel="noreferrer noopener"><i class="bx bxl-facebook"></i></a>
                    <a href="https://twitter.com/mytreeUganda?s=09" target="_blank" rel="noreferrer noopener"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.instagram.com/mytreeuganda/" target="_blank" rel="noreferrer noopener"><i class="bx bxl-instagram"></i></a>
                    <a href="https://m.youtube.com/channel/UC855xrO0nkHN4t8SOFCR_tw" target="_blank" rel="noreferrer noopener"><i class="bx bxl-youtube"></i></a>
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
            <button type="button" class="btn btn-brand ms-lg-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Donate
            </button>
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
