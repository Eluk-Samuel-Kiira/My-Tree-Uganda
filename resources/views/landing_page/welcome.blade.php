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
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    <!-- others in css folder -->
    <link rel="stylesheet" href="./css/boxicons.min.css" />
    <link rel="stylesheet" href="./css/owl.carousel.min.css" />
    <link rel="stylesheet" href="./css/owl.theme.default.min.css" />
    <!-- own css -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>My Tree Initiative</title>
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
        <a class="navbar-brand d-flex align-items-center" href="#home">
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

<!-- ? HERO SLIDER -->
<div class="owl-carousel owl-theme" id="hero-slider">
    <!-- slide 2 -->
    <div class="slide2 min-vh-100 bg-cover d-flex align-items-start py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-md-start">

                        <h1
                            class="display-2 my-10-increased text-start text-white"
                        >
                            Friends of My Tree Donors Group
                        </h1>
                        <p class="text-white fw-bold my-3">
                            Welcome to the Friends of My Tree Donors Group, where your annual membership donations
                            play a pivotal role in supporting our operational expenses. By becoming an annual member,
                            you become an integral part of our mission to protect and preserve trees. Your contributions
                            directly fuel our efforts to make the world greener. In return, enjoy a range of exclusive
                            benefits that deepen your connection to nature and our community.
                            Join us today and make a lasting impact while enjoying the rewards of being a Friend of My Tree.
                        </p>
                        @if(count($friends) > 0)
                            <div class="row my-3">
                                @foreach($friends as $friend)

                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        <div class="card card-transparent">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center text-white">
                                                    <div class="flex-shrink-0">
                                                        <img src="{{asset('storage/Friends/'.$friend->image)}}"
                                                             alt="Generic placeholder image" class="img-fluid"
                                                             style="width: 100px; height: 100px; border-radius: 50%; background: white;">
                                                    </div>
                                                    <div class="flex-grow-0 ms-3">
                                                        <h5 class="mb-1">{{$friend->name}}</h5>
                                                        <p class="mb-2 pb-1">{{$friend->title}}</p>
                                                        <a href="{{route('landing.friends')}}" class="btn btn-brand btn-brand-2 my-1">Read More</a>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <div class="float-sm-start mb-3">
                            <a href="#" class="btn btn-brand p-3">Become a Member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slide 2 -->

    <!-- slide 1 -->
    <div class="slide1 min-vh-100 bg-cover d-flex align-items-start py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="float-md-start">

                        <h1
                            class="display-2 my-10-increased center text-white"
                        >
                            Support My Tree Initiative
                        </h1>
                        <p class="text-white fw-bold my-3">
                            Help us grow a brighter future! Your donation makes a real difference. Every donation
                            you make goes directly toward planting and protecting trees, ensuring cleaner air,
                            thriving ecosystems, and a healthier Earth. Together, we can make the world a better place,
                            one tree at a time. Click the button below to donate now.
                        </p>

                        <div class="float-sm-start mb-3">
                            <a href="#" class="btn btn-brand p-3">Donate</a>
                        </div>
                        <div class="row my-3" style="opacity: 0">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <div class="card card-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-white">
                                            <div class="flex-shrink-0">
                                                <img src="/images/friend1.png"
                                                     alt="Generic placeholder image" class="img-fluid"
                                                     style="width: 100px; height: 100px; border-radius: 50%; background: white;">
                                            </div>
                                            <div class="flex-grow-0 ms-3">
                                                <h5 class="mb-1">Dr. Karusa Kiragu</h5>
                                                <p class="mb-2 pb-1">Director of Change Management at the UNAIDS</p>
                                                <a href="#" class="btn btn-brand btn-brand-2 my-1">Read More</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <div class="card card-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-white">
                                            <div class="flex-shrink-0">
                                                <img src="/images/friend2.png"
                                                     alt="Generic placeholder image" class="img-fluid"
                                                     style="width: 100px;height: 100px; border-radius: 50%; background: white;">
                                            </div>
                                            <div class="flex-grow-0 ms-3">
                                                <h5 class="mb-1">Gen. Katumba Wamala</h5>
                                                <p class="mb-2 pb-1">Minister of Works & Transport</p>
                                                <a href="#" class="btn btn-brand btn-brand-2 my-1">Read More</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <div class="card card-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-white">
                                            <div class="flex-shrink-0">
                                                <img src="/images/friend3.png"
                                                     alt="Generic placeholder image" class="img-fluid"
                                                     style="width: 100px; height: 100px; border-radius: 50%; background: white;">
                                            </div>
                                            <div class="flex-grow-0 ms-3">
                                                <h5 class="mb-1">Prof. Maggie Kigozi</h5>
                                                <p class="mb-2 pb-1">Director Zuri Model Farm</p>
                                                <a href="#" class="btn btn-brand btn-brand-2 my-1">Read More</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 custom-margin">
                                <div class="card card-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-white">
                                            <div class="flex-shrink-0">
                                                <img src="/images/friend3.png"
                                                     alt="Generic placeholder image" class="img-fluid"
                                                     style="width: 100px; height: 100px; border-radius: 50%; background: white;">
                                            </div>
                                            <div class="flex-grow-0 ms-3">
                                                <h5 class="mb-1">Prof. Maggie Kigozi</h5>
                                                <p class="mb-2 pb-1">Director Zuri Model Farm</p>
                                                <a href="#" class="btn btn-brand btn-brand-2 my-1">Read More</a>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 mb-3">
                                <div class="card card-transparent">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-white">
                                            <div class="flex-shrink-0">
                                                <img src="/images/friend4.png"
                                                     alt="Generic placeholder image" class="img-fluid"
                                                     style="width: 100px; height: 100px; border-radius: 50%; background: white;">
                                            </div>
                                            <div class="flex-grow-0 ms-3">
                                                <h5 class="mb-1">Dr. Antonio Querido</h5>
                                                <p class="mb-2 pb-1">Country Director FAO Uganda</p>
                                                <a href="#" class="btn btn-brand btn-brand-2 my-1">Read More</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--     slide 1-->
</div>
<!-- HERO SLIDER -->

<!-- ? who we are -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 intro text-center">
                <h1 style="margin-top: 20px;">Who we are?</h1>
                <p>
                    We are a My Tree Initiative, a youth leading Environmental Conservation Organization in Uganda that
                    aims to combat Climate Change and
                    enrich everyone's life through trees and make Uganda a greener, healthier and a more beautiful place.
                </p>

                <a href="{{route('landing.about')}}" class="btn btn-brand btn-brand-2 my-3 p-2">Read More</a>
            </div>
        </div>
        <div class="row gy-4">
            <!-- card 1 -->
            <div class="col-lg-4 col-sm-8">
                <div class="service-box">
              <span class="service-icon"><i>
                <img src="/images/afforestation.jpg">
              </i></span>
                    <h5 class="about-h5">Afforestation Projects</h5>
                    <p>
                        My Tree initiative strategically engages in restoration projects on National Forest Reserves across Uganda.
                    </p>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col-lg-4 col-sm-8">
                <div class="service-box">
              <span class="service-icon"><i>
                <img src="/images/educational.jpg">
              </i></span>
                    <h5 class="about-h5">Educational Campaigns</h5>
                    <p>
                        We organise workshops and seminars, print and distribute posters, brochures and pamphlets on environmental education to communities we serve.
                    </p>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col-lg-4 col-sm-8">
                <div class="service-box">
              <span class="service-icon"><i>
                <img src="/images/coorporate_planting.jpg">
              </i></span>
                    <h5 class="about-h5">Corporate Tree Planting Events</h5>
                    <p>
                        We organize unique Tree Planting Events which provide an ideal and really tangible way
                        to fulfil any business’s CSR sustainability targets, while having fun and inspiring
                        the next generation.
                    </p>
                </div>
            </div>
            <!-- card end -->
        </div>
    </div>
</section>
<!-- who we are-->


<!--  impact  -->
<section id="impact">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 intro-impact text-center">
                <h1 style="margin-top: 20px;" class="display-4">Our Impact</h1>
                <p>
                    Over 2 Million Trees Grown Since 2019.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-4 text-start">
                <!-- Vertical Navigation -->
                <ul class="nav flex-column nav-tabs card-header-tabs" id="impact-list" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#schools" role="tab" aria-controls="schools" aria-selected="true">In Schools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#forests" role="tab" aria-controls="forests" aria-selected="false">In Natural Forests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#roads" role="tab" aria-controls="roads" aria-selected="false">On Roadsides</a>
                    </li>
                    <li class="nav-item last-impact">
                        <a class="nav-link" href="#religion" role="tab" aria-controls="religion" aria-selected="false">In Religious Institutions</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <!-- Card Content -->
                <div class="card impact-transparent">
                    <div class="card-body">
                        <div class="tab-content mt-3">

                            <div class="tab-pane active" id="schools" role="tabpanel">
                                <div class="row">
                                    <p class="text-center">
                                        Our initiatives in schools are designed to inspire, educate, and empower students,
                                        teachers, and communities. By partnering with schools, we aim to create a ripple effect
                                        of environmental awareness, action, and stewardship. From planting trees to conducting educational
                                        programs, our efforts leave a lasting imprint on both the environment and young minds.
                                    </p>
                                </div>
                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <p>More than</p>
                                        <div class="display-3" id="schools-1"></div>
                                        <p>students engaged</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <div class="display-3" id="schools-2"></div>
                                        <p>schools participated</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <div class="display-3" id="schools-3"></div>
                                        <p>trees grown</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="forests" role="tabpanel" aria-labelledby="history-tab">
                                <div class="row">
                                    <p class="text-center">
                                        In partnership with local communities and conservation organizations, we work tirelessly
                                        to combat deforestation, restore damaged habitats, and safeguard the unique flora and
                                        fauna that call these forests home. Through tree planting, habitat restoration,
                                        and sustainable practices, our efforts aim to ensure these forests thrive for generations
                                        to come.
                                    </p>
                                </div>
                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <div class="display-3" id="forests-1"></div>
                                        <p>trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="forests-2"></div>
                                        <p>tree species</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="forests-3"></div>
                                        <p>acres of reafforestation</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="roads" role="tabpanel" aria-labelledby="deals-tab">
                                <div class="row">
                                    <p class="text-center">
                                        By planting trees and nurturing greenery along roadsides, we not only beautify
                                        our communities but also contribute to the well-being of city dwellers.
                                        Trees lining our streets act as natural air purifiers, reducing pollution,
                                        and offering respite from the urban hustle and bustle
                                    </p>
                                </div>
                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <div class="display-3" id="roads-1"></div>
                                        <p>Trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="roads-2"></div>
                                        <p>highways greened</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="roads-3"></div>
                                        <p>drivers and pedestrians involoved</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="religion" role="tabpanel" aria-labelledby="deals-tab">
                                <div class="row">
                                    <p class="text-center">
                                        In collaboration with religious communities, we plant trees as symbols of unity and
                                        care for the environment. These trees not only enhance the beauty of religious
                                        spaces but also serve as living reminders of our sacred duty to protect the planet.
                                    </p>
                                </div>
                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <div class="display-3" id="religion-1"></div>
                                        <p>trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="religion-2"></div>
                                        <p>Churches and Mosques greened</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p>More than</p>
                                        <div class="display-3" id="religion-3"></div>
                                        <p>participants in peer learning sessions</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  impact  -->

<!-- projects -->
<section id="projects" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 intro text-center">
                <h1 style="margin-top: 20px;">Project Gallery/Portfolio</h1>
                <p>
                    As a team, we belief planing trees are fundamental to life
                    in different aspects such as breathing in clean air, cooling the
                    planet, carbon capture, reduce the effects of floods etc. We are thrilled
                    to share with you some of our photos.
                </p>
            </div>
        </div>
        @if(count($galleries) > 0)

            <div class="row">
                <!-- team 1 -->
                @foreach ($galleries as $gallery)
                    <div class="col-lg-3 mb-2">
                        <div class="team-member">
                            <div class="img-wrapper">
                                <img src="{{ asset('storage/Gallery')}}/{{$gallery->image }}" alt="photo" style="height: 200px"/>
                                <div class="overlay"></div>
                                <div class="team-social-links">
                                    <div class="card" style="width: 19.5rem;">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $gallery->title }}</h5>
                                            <p class="card-text">{{ $gallery->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
<!-- projects -->

<!-- ? Partners -->
<section id="partners" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 intro text-center">
                <h1 style="margin-top: 20px;">Our Partners</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                    ipsa rerum atque quaerat ullam ad eos, sit perferendis sapiente
                    ducimus voluptatibus tempore sunt autem repellat?
                </p>
            </div>
        </div>
    </div>
    <div id="project-slider" class="owl-theme owl-carousel">
        <!-- project 1 -->
        @if($bank))

            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$bank->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$bank->category}}</h1>
                    <a href="{{route('landing.banks')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 2 -->
        @if($hotel)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$hotel->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$hotel->category}}</h1>
                    <a href="{{route('landing.hotels')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 3 -->
        @if($law_firm)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$law_firm->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$law_firm->category}}</h1>
                    <a href="{{route('landing.law_firms')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 4 -->
        @if($insurance_company)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$insurance_company->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$insurance_company->category}}</h1>
                    <a href="{{route('landing.insurance_companies')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 5 -->
        @if($hospital)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$hospital->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$hospital->category}}</h1>
                    <a href="{{route('landing.hospitals')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 6 -->
        @if($golf_club)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$golf_club->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$golf_club->category}}</h1>
                    <a href="{{route('landing.golf_clubs')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 7 -->
        @if($media_company)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$media_company->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$media_company->category}}</h1>
                    <a href="{{route('landing.media_companies')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 8 -->
        @if($international_agency)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$international_agency->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$international_agency->category}}</h1>
                    <a href="{{route('landing.international_agencies')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project 9 -->
        @if($government_agency)
            <div class="project">
                <img
                    src="{{asset('storage/Partners/'.$government_agency->image)}}"
                    style="width: auto; height: 200px; margin:auto;"
                    alt="cross gen"
                />
                <div class="overlay"></div>
                <div class="content">
                    <h1>{{$government_agency->category}}</h1>
                    <a href="{{route('landing.government_agencies')}}" class="btn btn-brand">See More</a>
                </div>
            </div>
        @endif
        <!-- project ends -->
    </div>
</section>
<!-- Partners -->

<!-- ? TEAM -->
<section id="team" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 intro text-center">
                <h1 style="margin-top: 20px;">Meet our team</h1>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure
                    ipsa rerum atque quaerat ullam ad eos, sit perferendis sapiente
                    ducimus voluptatibus tempore sunt autem repellat?
                </p>
            </div>
        </div>
        @if(count($team) > 0)
            <div class="row">
                @foreach($team as $member)

                    <div class="col-lg-3" >
                        <div class="team-member">
                            <div class="img-wrapper">
                                <img
                                    class="img"
                                    src="{{asset('storage/Team/'.$member->image)}}"
                                    alt="image"
                                />
                                <div class="overlay"></div>
                                <div class="team-social-links">
                                    @if($member->facebook != '')
                                        <a href="{{$member->facebook}}" target="_blank" rel="noreferrer noopener"><i class="bx bxl-facebook"></i></a>
                                    @endif
                                        @if($member->twitter != '')
                                            <a href="{{$member->twitter}}" target="_blank" rel="noreferrer noopener"><i class="bx bxl-twitter"></i></a>
                                        @endif
                                        @if($member->instagram != '')
                                            <a href="{{$member->instagram}}" target="_blank" rel="noreferrer noopener"><i class="bx bxl-instagram"></i></a>
                                        @endif
                                </div>
                            </div>
                            <div class="content">
                                <h5>{{$member->name}}</h5>
                                <p>{{$member->title}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
<!-- TEAM -->

{{--footer--}}
@include('layouts.contact_footer')
{{--footer end--}}

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

<!-- Add this script to your HTML document -->
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
        }, 10); // 10-millisecond interval between increments
    }

    // Function to activate a tab and start counting
    function activateAndCount(tabId) {
        // Deactivate all tabs
        tabs.forEach(tab => {
            tab.classList.remove('active');
        });

        // Activate the specified tab
        const activeTab = document.querySelector(`[href="#${tabId}"]`);
        if (activeTab) {
            activeTab.classList.add('active');
        }

        // Start counting when the tab's content is in view
        const contentElement = document.getElementById(tabId);
        if (contentElement) {
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
    }

    const tabs = document.querySelectorAll('.nav-link'); // Get all tab links

    tabs.forEach(tab => {
        tab.addEventListener('click', (event) => {
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

    // Call the function to activate and count the "Schools" tab by default
    activateAndCount("schools");

    // Call the function to observe the "Schools" tab when needed
    observeSchoolsTab();
</script>

</body>
</html>
