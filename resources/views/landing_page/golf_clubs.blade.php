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
    <title>Our Golf Club Partners</title>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar">

@include('layouts/secondary_nav')
<!--MAIN NAVBAR -->

<!--Our friends-->
<div class="container mt-4">
    <div class="row">
        <div class="col-12 text-center">
            <h1 style="margin-top: 20px;">Partners of My Tree Initiative</h1>
            <p>
                Welcome to the Friends of My Tree Donors Group, where your annual membership donations  play a pivotal role in supporting our operational expenses. By becoming an annual member, you become an integral part of our mission to protect and preserve trees. Your contributions directly fuel our efforts to make the world greener. In return, enjoy a range of exclusive benefits that deepen your connection to nature and our community. Join us today and make a lasting impact while enjoying the rewards of being a Friend of My Tree.
            </p>
            <a href="#" class="btn btn-brand btn-brand-2 my-3 p-3">Become a Partner</a>
        </div>
    </div>
    @if(count($golf_clubs) > 0)
        @foreach($golf_clubs as $golf_club)

            <div class="card my-4 friend-card">
                <div class="row no-gutters d-flex align-items-center">
                    <!-- Image on the left for desktop -->
                    <div class="col-md-4 col-img">
                        <div class="image-container">
                            <img src="{{asset('storage/Partners/'.$golf_club->image)}}" class="card-img" alt="Image">
                        </div>
                    </div>
                    <!-- Content on the right for desktop -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$golf_club->name}}
                            </h5>
                            <h6 class="text-muted">{{$golf_club->category}}</h6>
                            <div class="card-text">
                                <p>
                                    {!! $golf_club->message !!}
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
    {{ $golf_clubs->links('pagination::bootstrap-5') }}
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
