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
<body>
    <div class="lbtn btn-danger">Please Enter Your Email  To Unsubscribed</div>
    <!-- lockscreen credentials (contains the form) -->
    <span class="btn btn-success">
        <div class="col-sm-12">
            <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
            @if(session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('unsubscribe.store') }}">
            @csrf  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif   
                <div class="w-100">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control border-light" style="padding: 20px 30px;" placeholder="Your Email Address" required>
                        <button class="btn btn-primary">Unsubscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </span>
</body>