<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="/images/pps.png" />
    <title>Royal Gang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Oswald:400,700">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ranking-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/animate.css') }}">
    <link rel="stylesheet" href=" {{ asset('fonts/flaticon/font/flaticon.css') }}">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="  {{ asset('css/style.css') }}">

</head>
<body>



    <div class="site-wrap">


        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div> <!-- .site-mobile-menu -->

        <div class="container">

            <div class="row no-gutters site-navbar align-items-center py-3">

                <div class="col-6 col-lg-2 site-logo">
                    <a href="index.html">Royal Gang</a>
                </div>
                <div class="col-6 col-lg-10 text-right menu">
                    <nav class="site-navigation text-right text-md-right">

                        <ul class="site-menu js-clone-nav d-none d-lg-block">
                            <!-- NAVIGATION SECTION -->
                            @yield('nav')

                        </ul>

                        <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a>
                    </nav>
                </div>
            </div>

        </div>


        @yield('main-content')


        <div class="footer">
            <div class="container">
                <div class="row footer-inner">
                    <div class="col-lg-3">
                        <div class="widget mb-4">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium vitae aliquam quia beatae necessitatibus omnis nisi, maxime tempora neque et!</p>
                        </div>
                    </div>
                    <div class="col-lg-2 pl-4">
                        <div class="widget mb-4">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled links">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('players') }}">Player</a></li>
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget mb-4">
                            <h3>Social</h3>
                            <ul class="list-unstyled social">
                                <li><a href="https://www.facebook.com/royalfcnanarchikulam" target="_blank"><span class="mr-2 icon-facebook"></span> Facebook</a></li>
                                <li><a href="https://www.instagram.com/royal__fc_/" target="_blank"><span class="mr-2 icon-instagram"></span> Instagram</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 mt-5 text-center copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy; <script>
                                document.write(new Date().getFullYear());

                            </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Made <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://www.instagram.com/amir__zain/" target="_blank">Amir</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    {{-- <div class="col-12 mt-5 text-center copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Made <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://www.instagram.com/amir__zain/" target="_blank">Amir</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div> --}}

                </div>
            </div>
        </div>


    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/aos.js') }}"></script>


    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
