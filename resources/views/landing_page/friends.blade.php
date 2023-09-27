@include("layouts.header")

<title>Our Friends</title>
</head>
    <title>Our Friends</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">
<!-- ? TOP NAVBAR -->
@include("layouts.topnav")

<!--? MAIN NAVBAR -->
@include("layouts.secondary_mainnav")

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
    @if ($one_friend)
        <div class="card my-4 friend-card">
            <div class="row no-gutters d-flex align-items-center">
                <!-- Image on the left for desktop -->
                <div class="col-md-4 col-img">
                    <div class="image-container">
                        <img src="{{ asset('storage/Friends')}}/{{$one_friend->image }}" class="card-img" alt="Image">
                    </div>
                </div>
                <!-- Content on the right for desktop -->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $one_friend->name }}</h5>
                        <h6 class="text-muted">{{ $one_friend->title }}</h6>
                        <div class="card-text">
                            <p>
                                {!! $one_friend->message !!}
                            </p>
                            <!-- Add more content as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
<!--Our friends-->

<!-- ? FOOTER -->
@include("layouts.contact_footer")
