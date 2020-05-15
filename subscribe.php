<?php
    try{
        $db = new mysqli("localhost", "root", "", "e-think_database");
    } catch(Exception $exc){
        echo $exc->getTraceAsString();
    }
    if(isset($_POST['submit'])){
        if(isset($_POST['name']) && isset($_POST['email']))
            $name = $_POST['name'];
            $email = $_POST['email'];

        $is_insert = $db->query("INSERT INTO `email_list`( `Name`, `Email`) VALUES('$name','$email')");

        if($is_insert == TRUE){
            echo "<h3>Your subscription request has been submitted!</h3>";
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Subscribe</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/e_think_icon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="img/core-img/e_think_icon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>


<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="index.html" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="./index.html"><img src="./img/core-img/E-Think_ColoredLogo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./about.html">About</a></li>
                                    <li><a href="./gallery.html">Gallery</a></li>
                                    <li><a href="#">Services</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                    <li class="active"><a href="./subscribe.html">Subscribe</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/kim_img/2_bg.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Subscribe</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Subscribe</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Contact Area Start -->
    <div class="contact-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <h3 class="contact-title mb-30">Subscribe for more</h3> <br>
                    <h4>Exclusive Content & Giveaways</h4>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <!-- Contact Info -->
                    <div class="contact-info mb-100">
                        <p>Join our Community</p>
                        <a href="#">Subscribe to our newsletter to have exclusive access to our ealry releases as well as exclusive giveaways.</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->

        <form class="contact100-form validate-form centered text-center" action="" method="post">
            <div class="wrapper text-center centered">
                <h1>Subscribe to our Newsletter</h1>
                <p>Receive updates and new content instantly!</p>
                
                <div class="newsletter text-center centered">
                    <div class="wrap-input100 rs1-wrap-input100 validate-input centered" data-validate="">
                        <span class="label-input100" for="name">Name<i class=""></i></span>
                        <input type="name" class="input100 centered" name="name" placeholder="Enter your Name!">

                        <span class="focus-input100"></span>


                    </div>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input centered" data-validate="Valid email is required: ex@abc.xyz">
                        <span class="label-input100" for="email">Email<i class="fa fa-envelope"></i></span>
                        <input type="email" class="input100 centered" name="email" placeholder="Enter your Email Address!">

                        <span class="focus-input100"></span>

                    </div>
                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn centered" type="submit" name="submit" value="submit">
                            <span>
                                Submit
                                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </form>


        <!-- Follow Area Start -->
        <section class="follow-area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Follow Instagram</h2>
                            <p>@E-Think Creatives</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Instagram Feed Area -->
            <div class="instragram-feed-area owl-carousel">
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/images.jpeg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/Koffeeee.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/Design2For Newsletter Charts.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/Day 4.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/Day 3.jpg" alt="">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                        <a href="#">
                            <i class="ti-instagram" aria-hidden="true"></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
                <!-- Single Instagram Item -->
                <div class="single-instagram-item">
                    <img src="img/kim_img/Day 2.jpg " alt=" ">
                    <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center ">
                        <a href="# ">
                            <i class="ti-instagram " aria-hidden="true "></i>
                            <span>E-Think Creatives</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Follow Area End -->

        <!-- Footer Area Start -->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-content d-flex align-items-center justify-content-between">

                            <!-- Footer Logo -->
                            <div class="footer-logo ">
                                <a href="# "><img src="img/core-img/ColoredEthinkLogo.png" alt=" "></a>
                            </div>
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-twitter-alt" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="ti-pinterest" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- **** All JS Files ***** -->
        <!-- jQuery 2.2.4 -->w
        <script src="js/jquery.min.js"></script>
        <!-- Popper -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- All Plugins -->
        <script src="js/alime.bundle.js"></script>
        <!-- Active -->
        <script src="js/default-assets/active.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="vendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
        <script src="js/map-custom.js"></script>
        <!--===============================================================================================-->
        <script src="js/main.js"></script>


</body>

</html>