<!--? MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{route("landing.index")}}">
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
                    <a class="nav-link" href="#home">Our Donors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">Who We Are</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#impact">Our Impact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Our Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">Our Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#team">Our Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
            <a href="#" class="btn btn-brand ms-lg-3">Donate</a>
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
