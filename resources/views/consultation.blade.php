<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedicTab | Consultation</title>
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/other.css') }}">
</head>
<body>
    <nav class="navbar py-4 px-3 p-fixed t-0 w-100">
        <div class="d-flex">
            <div class="brand ml-4">
                <div class="d-flex text-white">
                <h3 class="h brand-title">MedicTab</h3>
            </div>
            </div>
            <div class="menu p-absolute text-center d-md-none r-0 pr-7" id="nav-menu">
                <ul class="nav-ul d-flex w-100 d-md-inline-block">
                    <li class="px-3"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li class="px-3"><a href="{{ url('consultation') }}" class="nav-link">Consultation</a></li>
                    <li class="px-3"><a href="{{ url('meet') }}" class="nav-link">Meet</a></li>
                    <li class="px-3"><a href="#" class="nav-link">Course</a></li>
                    <li class="px-3"><a href="#" class="nav-link">Articles</a></li>
                    <div class="px-3 buttons-auth">
                        <button class="border-0 py-2 px-5 btn-white shadow-black" id="btn-signin">SignIn</button>
                        <button class="rad py-2 text-white px-4 btn-transparent border-white" id="btn-signup">SignUp</button>
                    </div>
                </ul>
            </div>
            <div class="nav-toggler d-none d-md-inline-block p-absolute r-0 mr-8" id="nav-toggler">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <div class="container-lg bg-primary p-relative py-8" id="jumbotron-welcome" style="background-image: url('img/consultation/consultation.png');">
        <div class="overlay-primary"></div>
        <div class="row py-8 px-5 my-8">
            <div class="col-md-12 p-relative text-center col-sm-12 col-xs-12 py-8 px-8">
                <h1 class="h text-white mb-0" style="font-size: 2.5rem;">Start with us <br> To Consultation </h1>
            </div>
        </div>
    </div>

    <div class="container-lg p-relative overflow-hidden">
        <div class="rect-decor" style="bottom: 0px; opacity: .5;"></div>
        <div class="rect-decor" style="opacity: .5;"></div>
        <img src="img/illust/vector.png" class="p-absolute w-75" style="bottom: 0px;" alt="">
        <div class="container p-relative py-8">
            <div class="text-center p-relative" style="z-index: 100;">
                <h3 class="h mb-0 text-gainsboro">Welcome to MedicTab</h3>
                <h1 class="h text-black">Consultation with doctor now</h1>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-12"></div>
                    <div class="col-lg-8 col-md-12 col-xs-12">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione consectetur eos vel dolor hic at beatae ipsum earum, saepe provident laudantium, repellendus eius sunt facere? Id labore corporis perferendis. Eaque.</p>
                    </div>
                </div>
                <div class="buttons mt-4">
                    <button class="btn-primary mx-2">Start Consultation</button>
                    <button class="btn-primary mx-2">View Doctors</button>
                </div>
            </div>
        </div>
        <div class="text-center p-relative" style="z-index: 100;">
            <img src="img/doctors/doctors2.png" class="p-relative doctor-wal1" alt="">
            <img src="img/doctors/doctors1.png" class="p-relative doctor-wal2" alt="">
        </div>
    </div>

    <footer class="container-lg py-5">
        <div class="text-center text-primary-light">
            <h2 class="h">MedicTab</h2>
            <p class="mt-4">
                <span class="mx-3 my-2 d-inline-block d-md-block">Home</span>
                <span class="mx-3 my-2 d-inline-block d-md-block">Consultation</span>
                <span class="mx-3 my-2 d-inline-block d-md-block">Meet</span>
                <span class="mx-3 my-2 d-inline-block d-md-block">Course</span>
                <span class="mx-3 my-2 d-inline-block d-md-block">Articles</span>
            </p>
            <p class="mt-4">
                <span><i class="fab fa-instagram mx-3"></i></span>
                <span><i class="fab fa-facebook mx-3"></i></span>
                <span><i class="fab fa-twitter mx-3"></i></span>
            </p>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-xs-6 text-left">
                        <p>English</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p>Valen RPL</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>
<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('js/responsive.js') }}"></script>
<script src="{{ asset('js/components/navbar.js') }}"></script>
</html>
