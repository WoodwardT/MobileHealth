{{--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>--}}

    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <!--    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">-->
    {{--    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    {{--Browser Icon--}}
    <link rel="icon" href="/images/MobileHealthTabLogo.png" type="image/MobileHealthTabLogo.png">

    <title>Mobile Health</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/mobilehealth.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/flex-slider.css">

</head>
<body>

{{--Navbar--}}

<header>
    <!--Navbar -->
    <div class="bk">
        <div class="container">
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
                <a class="navbar-brand nav-img" href="index.html"><img src="/images/MobileHealth1.png"
                                                                       alt="Mobile Health Logo" height="70px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-333"
                        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent-333">
                    <ul class="navbar-nav mr-auto page-navigation">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/courses">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/book">Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contactus">Contact Us</a>
                        </li>
                        {{--<button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarResponsive"
                                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>--}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--/.Navbar -->
</header>





{{--<!-- Header -->
    {{--<header class="">--}}
    {{--    <nav class="navbar navbar-expand-lg navbar-light static-top">--}}
    {{--        <div class="container">--}}
    {{--            <a class="navbar-brand" href="/"><img src="/images/MobileHealth1.png" alt="Mobile Health Logo"--}}
    {{--                                                           height="90"></a>--}}
    {{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"--}}
    {{--                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                <span class="navbar-toggler-icon"></span>--}}
    {{--            </button>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarResponsive">--}}
    {{--                <ul class="navbar-nav ml-auto">--}}
    {{--                    <li class="nav-item active">--}}
    {{--                        <a class="nav-link" href="/">Home</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item active">--}}
    {{--                        <a class="nav-link" href="/courses">Courses</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link" href="/book">Bookings</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link" href="/about">About Us</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link" href="/contact">Contact Us</a>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
    {{--</header>--}}


    <div>
        @yield('content')
    </div>

    <hr>
    <!-- Footer Starts Here -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="course-container course-theme">
                    <div class="course-container-box">
                        <div class="footer-item">
                            <div class="flex-column">
                                <a href="/"> <img src="/images/MobileHealth1.png" alt="Company Logo" class="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div class="footer-item">

                            <p>61 Grant Road, Frankton, Central&nbspOtago</p>
                            <p>PO Box 2036, Queenstown</p>
                            <p>
                                <a href="#"><i class="fa fa-phone-square"></i>&nbsp03&nbsp111&nbsp2222</a> &nbsp;
                                <a href="#"><i class="fa fa-phone-square"></i>&nbsp0274&nbsp423&nbsp624</a>
                            </p>
                            <p>
                                <a href="mailto: firstaid@mobilehealth.co.nz" target="_blank"><i class="fa fa-envelope"></i>
                                    firstaid@mobilehealth.co.nz</a>
                            </p>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div>
                            <p>
                                <a href="https://engagesafety.co.nz/" target="_blank">
                                    <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                         class="footer-media" >&nbsp
                                    www.engagesafety.co.nz
                                </a>
                            </p>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/" target="_blank">
                                <i class="fa fa-facebook"></i></a>
                            </a>
                            <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/" target="_blank">
                                <i class="fa fa-linkedin"></i></a>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Ends Here -->
{{--

        <hr>

        <!-- Footer Starts Here -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="course-container course-theme">
                        <div class="course-container-box">
                            <div class="footer-item">
                                <div class="flex-column">
                                    <a href="/"> <img src="/images/MobileHealth1.png" alt="Company Logo" class="logo"></a>
                                </div>
                            </div>
                        </div>
                        <div class="course-container-box">
                            <div class="footer-item">

                                <p>61 Grant Road, Frankton, Central Otago</p>
                                <p>PO Box 2036, Queenstown</p>
                                <p>
                                    <a href="#"><i class="fa fa-phone-square"></i>&nbsp03&nbsp111&nbsp2222</a> &nbsp;
                                    <a href="#"><i class="fa fa-phone-square"></i>&nbsp0274&nbsp423&nbsp624</a>
                                </p>
                                <p>
                                    <a href="mailto: firstaid@mobilehealth.co.nz"><i class="fa fa-envelope"></i>
                                        firstaid@mobilehealth.co.nz</a>
                                </p>
                            </div>
                        </div>
                        <div class="course-container-box">
                            <div>
                                <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/">
                                    <img src="/images/FacebookLogo.png" alt="Facebook Logo" class="footer-media">
                                </a>
                                <a href="https://www.linkedin.com/company/mobilehealthqueenstown/about/">
                                    <img src="/images/LinkedinLogo.png" alt="Linkedin Logo" class="footer-media">
                                </a>
                                <a href="https://engagesafety.co.nz/">
                                    <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo" class="footer-media">&nbsp
                                    www.engagesafety.co.nz
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Ends Here -->

--}}


                <!-- Sub Footer Starts Here -->
                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright-text">
                                    <p>Copyright &copy; 2021 Mobile Health | Design by:
                                        SIT-STUDENTS-DESIGN-IT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sub Footer Ends Here -->


                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


                <!-- Additional Scripts -->
                <script src="js/custom.js"></script>
                <script src="js/owl.js"></script>
                <script src="js/isotope.js"></script>
                <script src="js/flex-slider.js"></script>


                <script language="text/Javascript">
                    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                    function clearField(t) {                   //declaring the array outside of the
                        if (!cleared[t.id]) {                      // function makes it static and global
                            cleared[t.id] = 1;  // you could use true and false, but that's more typing
                            t.value = '';         // with more chance of typos
                            t.style.color = '#fff';
                        }
                    }
                </script>


</body>

</html>
