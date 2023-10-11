@include('layouts.modal')
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
{{--            <a href="#donate" class="btn btn-brand ms-lg-3">--}}
{{--                Donate--}}
{{--            </a>--}}
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


{{-------------------------    Dont touch or edit this section. ignore it.-------------------}}
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
                            <a href="#donate" class="btn btn-brand p-3">Donate</a>
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
{{---------------------------- Dont touch the code above------------------------------------}}
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
                  <a href="{{route('landing.about')}}">
                      <img src="/images/afforestation.jpg">
                  </a>
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
                  <a href="{{route('landing.about')}}">
                      <img src="/images/educational.jpg">
                  </a>
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
                  <a href="{{route('landing.about')}}">
                      <img src="/images/coorporate_planting.jpg">
                  </a>
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
                    Over 2 Million Trees Grown Since 2019. We plant trees in Uganda  with a particular focus in Eastern,
                    Central and Northern regions covering Jinja, Mbale, Kampala, Wakiso, Mityana, Nakasongola, and Gulu Districts.
                </p>
            </div>
        </div>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-4 text-start">
                <!-- Vertical Navigation -->
                <ul class="nav flex-column nav-tabs card-header-tabs" id="impact-list" role="tablist">
                    <li class="nav-item d-flex align-items-end">
                        <a class="nav-link active" href="#schools" role="tab" aria-controls="schools" aria-selected="true">
                            <i class='bx bxs-tree'></i> In Schools</a>
                    </li>
                    <li class="nav-item d-flex align-items-end">
                        <a class="nav-link" href="#forests" role="tab" aria-controls="forests" aria-selected="false">
                            <i class='bx bxs-tree'></i> In Natural Forests</a>
                    </li>
                    <li class="nav-item d-flex align-items-end">
                        <a class="nav-link" href="#roads" role="tab" aria-controls="roads" aria-selected="false">
                            <i class='bx bxs-tree'></i> On Roadsides</a>
                    </li>
                    <li class="nav-item last-impact d-flex align-items-end">
                        <a class="nav-link" href="#religion" role="tab" aria-controls="religion" aria-selected="false">
                            <i class='bx bxs-tree'></i> In Religious Institutions</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <!-- Card Content -->
                <div class="card impact-transparent">
                    <div class="card-body">
                        <div class="tab-content mt-3">

                            <div class="tab-pane active" id="schools" role="tabpanel">

                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="schools-1" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">students engaged</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="schools-2" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">schools participated</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="schools-3" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">trees grown</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-center" style="font-weight: bolder">
                                        Our initiatives in schools are designed to inspire, educate, and empower students,
                                        teachers, and communities. By partnering with schools, we aim to create a ripple effect
                                        of environmental awareness, action, and stewardship. From planting trees to conducting educational
                                        programs, our efforts leave a lasting imprint on both the environment and young minds.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane" id="forests" role="tabpanel" aria-labelledby="history-tab">

                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="forests-1" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="forests-2" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">tree species</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="forests-3" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">acres of reafforestation</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-center" style="font-weight: bolder">
                                        In partnership with local communities and conservation organizations, we work tirelessly
                                        to combat deforestation, restore damaged habitats, and safeguard the unique flora and
                                        fauna that call these forests home. Through tree planting, habitat restoration,
                                        and sustainable practices, our efforts aim to ensure these forests thrive for generations
                                        to come.
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane" id="roads" role="tabpanel" aria-labelledby="deals-tab">

                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="roads-1" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">Trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="roads-2" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">highways greened</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="roads-3" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">drivers and pedestrians involoved</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-center" style="font-weight: bolder">
                                        By planting trees and nurturing greenery along roadsides, we not only beautify
                                        our communities but also contribute to the well-being of city dwellers.
                                        Trees lining our streets act as natural air purifiers, reducing pollution,
                                        and offering respite from the urban hustle and bustle
                                    </p>
                                </div>
                            </div>

                            <div class="tab-pane" id="religion" role="tabpanel" aria-labelledby="deals-tab">

                                <div class="row my-3 border border-top-0 border-start-0 border-end-0 border-light">
                                    <!-- This row spans 2 columns -->
                                    <div class="col-6 mb-3 rowspan-2 text-center border border-top-0 border-start-0 border-bottom-0 border-light">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="religion-1" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">trees planted</p>
                                    </div>
                                    <div class="col-6 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="religion-2" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">Churches and Mosques greened</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p style="font-weight: bold" class="text-primary">More than</p>
                                        <div class="display-3" id="religion-3" style="font-weight: bolder"></div>
                                        <p style="font-weight: bold" class="text-primary">participants in peer learning sessions</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="text-center" style="font-weight: bolder">
                                        In collaboration with religious communities, we plant trees as symbols of unity and
                                        care for the environment. These trees not only enhance the beauty of religious
                                        spaces but also serve as living reminders of our sacred duty to protect the planet.
                                    </p>
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
                <h1 style="margin-top: 20px;">Project Photos</h1>
                <p>
                    Step into the visual journey of My Tree Initiative as we present a captivating collection of project photos. These images capture the essence of our mission in vibrant detail,
                    offering a visual journey into the remarkable work we do. Explore the moments that tell the story of our dedication to a greener planet through the lens of these inspiring photographs.
                    tree planting, one captivating image at a time.
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
                    In a world where business transcends boundaries, these have chosen to stand with us, not just as partners
                    but as champions of change. Their decision to align their corporate values with our mission has brought
                    us closer to realizing our vision for a better world. Their belief in the greater good, commitment to
                    sustainability and willingness to invest in a brighter future are qualities we deeply admire. Their
                    actions speak volumes, inspiring others to follow suit and magnify the positive influence of our collective efforts.
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
                    Meet our dynamic group of visionary individuals who are not just the leaders of tomorrow but
                    the trailblazers of today. With a fresh perspective, unwavering dedication, and a commitment
                    to innovation, we are steering our organization toward a brighter future. Our passion for
                    excellence and drive to make a difference set the stage for our impactful leadership that's
                    ready to inspire and shape the world.
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

<!-- ? DONATE -->
{{--<section id="donate">--}}
{{--    <div class="container">--}}
{{--        <div class="row single-form g-0">--}}
{{--            <div class="col-sm-12 col-lg-6">--}}
{{--                <div class="right">--}}
{{--                    @php--}}
{{--                        $tx_ref = uniqid();--}}
{{--                    @endphp--}}
{{--                    <img src="{{ asset('images/mtn_momo.jpg')}}" alt="MTN MOMO" style="max-width: 100px; height: 52px;" />--}}
{{--                    <img src="{{ asset('images/airtelmomo.png')}}" alt="AIRTEL MOMO" style="max-width: 100px" />--}}
{{--                    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 100%; margin: 0 auto;">--}}
{{--                        @csrf--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="public_key" value="FLWPUBK_TEST-54f16ec2c53bdffdb05c7452003a717b-X" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="tx_ref" value="{{ $tx_ref }}" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="currency" value="UGX" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="meta[token]" value="54" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="payment_options" value="mobilemoneyuganda" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="redirect_url" value="https://mytreeuganda.org/" />--}}
{{--                        <div>--}}
{{--                            <x-label for="name" class="form-label" value="{{ __('Full Name') }}" /><br>--}}
{{--                            <x-input id="name" class="form-control" type="text" name="customer[name]" required />--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <x-label for="email" class="form-label" value="{{ __('Your Email') }}" /><br>--}}
{{--                            <x-input id="email" class="form-control" type="email" name="customer[email]" required />--}}
{{--                        </div>--}}

{{--                        <div class="block mt-1 w-full">--}}
{{--                            <label for="amount" class="form-label">Select Amount:</label>--}}
{{--                            <select name="amount" class="form-control" id="amount" required>--}}
{{--                                <option value="">Select Amout</option>--}}
{{--                                <option value="10000">10,000 ugx</option>--}}
{{--                                <option value="20000">20,000 ugx</option>--}}
{{--                                <option value="50000">50,000 ugx</option>--}}
{{--                                <option value="100000">100,000 ugx</option>--}}
{{--                                <option value="150000">150,000 ugx</option>--}}
{{--                                <option value="200000">200,000 ugx</option>--}}
{{--                                <option value="500000">500,000 ugx</option>--}}
{{--                                <option value="700000">700,000 ugx</option>--}}
{{--                                <option value="1000000">1,000,000 ugx</option>--}}
{{--                                <option value="5000000">5,000,000 ugx</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div class="block mt-1 w-full">--}}
{{--                            <label for="network" class="form-label">Select Network:</label>--}}
{{--                            <select class="form-control" name="network" id="network">--}}
{{--                                <option value="">Select Network</option>--}}
{{--                                <option value="MTN">MTN</option>--}}
{{--                                <option value="AIRTEL">AIRTEL</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <x-label for="phone_number" class="form-label" value="{{ __('Phone Number') }}" /><br>--}}
{{--                            <x-input id="phone_number" class="form-control" type="text" name="customer[phone_number]" required />--}}
{{--                        </div>--}}

{{--                        <div class="flex items-center justify-end mt-4">--}}
{{--                            <x-button class="ml-4">--}}
{{--                                {{ __('Checkout') }}--}}
{{--                            </x-button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm-12 col-lg-6">--}}
{{--                <div class="right">--}}
{{--                    <img src="{{ asset('images/visamaster.png')}}" alt="CREDIT CARD" style="max-width: 100px; height: 52px;" />--}}
{{--                    <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay" style="width: 100%; margin: 0 auto;">--}}
{{--                        @csrf--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="public_key" value="FLWPUBK_TEST-54f16ec2c53bdffdb05c7452003a717b-X" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="tx_ref" value="{{ $tx_ref }}" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="currency" value="USD" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="meta[token]" value="54" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="payment_options" value="card" />--}}
{{--                        <x-input class="block mt-1 w-full" type="hidden" name="redirect_url" value="https://mytreeuganda.org/" />--}}
{{--                        <div>--}}
{{--                            <x-label for="name" class="form-label" value="{{ __('Full Name') }}" /><br>--}}
{{--                            <x-input id="name" class="form-control" type="text" name="customer[name]" required />--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <x-label for="email" class="form-label" value="{{ __('Your Email') }}" /><br>--}}
{{--                            <x-input id="email" class="form-control" type="email" name="customer[email]" required />--}}
{{--                        </div>--}}

{{--                        <div class="block mt-1 w-full">--}}
{{--                            <label for="amount" class="form-label">Select Amount:</label>--}}
{{--                            <select name="amount" class="form-control" id="amount" required>--}}
{{--                                <option value="">Select Amout</option>--}}
{{--                                <option value="4">4 USD</option>--}}
{{--                                <option value="9">9 USD</option>--}}
{{--                                <option value="14">14 USD</option>--}}
{{--                                <option value="27">27 USD</option>--}}
{{--                                <option value="40">40 USD</option>--}}
{{--                                <option value="54">54 USD</option>--}}
{{--                                <option value="133">133 USD</option>--}}
{{--                                <option value="186">186 USD</option>--}}
{{--                                <option value="266">266 USD</option>--}}
{{--                                <option value="1329">1329 USD</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

{{--                        <div>--}}
{{--                            <x-label for="phone_number" class="form-label" value="{{ __('Phone Number') }}" /><br>--}}
{{--                            <x-input id="phone_number" class="form-control" type="text" name="customer[phone_number]" required />--}}
{{--                        </div>--}}

{{--                        <div class="flex items-center justify-end mt-4">--}}
{{--                            <x-button class="ml-4">--}}
{{--                                {{ __('Checkout') }}--}}
{{--                            </x-button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</section>--}}
<!-- End -->

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
