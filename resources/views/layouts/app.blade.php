<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    {{--    Google fonts--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
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

    {{--reCapture script--}}
    <script type="text/javascript">
        var onloadCallback = function () {
            grecaptcha.render('html_element', {
                'sitekey': '6Lf0RkocAAAAANXcu9HmyRP4x5bHQuVMny64wm8a'
            });
        };
    </script>

{{--Readmore Script--}}


</head>
<body>

{{--Navbar--}}

<header>
    <!--Navbar -->
    <div class="bk">
        <div class="container">
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
                <a class="navbar-brand nav-img" href="/"><img src="/images/MobileHealth1.png"
                                                              alt="Mobile Health Logo"></a>
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
                        <li class="nav-item">
                            <a class="nav-link" href="/play">PLAY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/play2">PLAY2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/play3">PLAY3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/bookcourse">Bookcourse</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/payment">Payment</a>
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


<main>
    <div>
        @yield('content')
    </div>
</main>


<!-- Footer Starts Here -->
<footer>

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
                                <a href="mailto:firstaid@mobilehealth.co.nz" target="_blank"><i
                                        class="fa fa-envelope"></i>
                                    firstaid@mobilehealth.co.nz</a>
                            </p>
                        </div>
                    </div>
                    <div class="course-container-box">
                        <div>
                            <p>
                                <a href="https://engagesafety.co.nz/" target="_blank">
                                    <img src="/images/EngageSafetyLogo.png" alt="Engage Safety Logo"
                                         class="footer-media">&nbsp
                                    www.engagesafety.co.nz
                                </a>
                            </p>
                        </div>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/Mobile-Industrial-Health-Services-Engage-Safety-1562735880645278/"
                               target="_blank">
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

        <!-- Sub Footer Starts Here -->
        <div class="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2021 Mobile Health | Design by: SIT-STUDENTS-DESIGN-IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sub Footer Ends Here -->
</footer>

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
