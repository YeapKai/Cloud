<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn,"SELECT * FROM customer WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    
}
else{
    header("Location: index.php");
    
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>99 Speedmart</title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Noto+Sans+TC:300,400,700|Open+Sans+Condensed:300,700|Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <link href="Content/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/ionicons.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/flaticon.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Main Slider-->
    <link href="Content/assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="Content/assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
    <link href="Content/assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <!--Light box-->
    <link href="Content/assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <!-- carousel -->
    <link href="Content/assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="Content/assets/css/style.css" rel="stylesheet">
    <link href="Content/assets/css/index.css" rel="stylesheet">
    <link href="Content/assets/css/index3.css" rel="stylesheet">
    <link href="Content/assets/css/header.css" rel="stylesheet">
    <link href="Content/assets/css/footer.css" rel="stylesheet">
    <link href="Content/assets/css/font.css" rel="stylesheet">

    
    <link href="Content/assets/css/fancybox.css" rel="stylesheet" type="text/css" />


    <script type="text/javascript" src="Content/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/tether.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/bootstrap.min.js"></script>

    <!-- revolution Js -->
    <script type="text/javascript" src="Content/assets/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="Content/assets/js/jquery.revolution.js"></script>
    <!-- fancybox Js -->
    <script src="Content/assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
    <script src="Content/assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>

    <!-- masonry,isotope Effect Js -->
    <script src="Content/assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="Content/assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="Content/assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="Content/assets/js/jquery.appear.js" type="text/javascript"></script>
    <!-- popup -->
    <script src="Content/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- parallax Js -->
    <script src="Content/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="Content/assets/js/jquery.appear.js" type="text/javascript"></script>
    <!-- matchHeight Js -->
    <script src="Content/assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>
    <!-- carousel Js -->
    <script src="Content/assets/js/owl.carousel.js" type="text/javascript"></script>
    <!-- Accordion Js -->
    <script type="text/javascript" src="/Content/assets/js/jquery.accordion.js"></script>

    <!-- Back to top Js -->
    <script src="Content/assets/js/back-top.js" type="text/javascript"></script>

    <script type="text/javascript" src="Content/assets/js/validation.js"></script>
    <script src="Content/assets/js/custom.js" type="text/javascript"></script>
    <script src="Content/assets/js/hijax.js" type="text/javascript"></script>
    
    
    <script>
    function logoutAlert(){
       let text = "Do you want to logout?";
  if (confirm(text) == true) {
    window.location.href = "logout.php";
  } else {
   window.location.href = window.location.href;
  }
        
    }
    </script>
    
    
</head>

<body>


    <!-- Header start -->
    <header>
        <a href="index.php"></a>
        <div class="middel-part__block">
            <div class="container">
                <div class="row">
                    <div class="mobile-plr col-lg-4 d-md-flex align-items-stretch flex-md-column flex-lg-row">
                        <div class="logo d-flex justify-content-center justify-content-lg-start">
                            <a href="home.php"> <img src="Content/assets/images/logo.png" alt="Logo"> </a>
                        </div>
                    </div>
                    <div class="col-lg-8 hide-s">
                        <div class="top-info__block text-right">
                            <ul>

                                <li>    
                                    <p>
                                        <span>CUSTOMER HOTLINE</span><a href="tel:60105000099">6010-5000099</a>
                                    </p>
                                </li>
                                <li class="social">
                                    <a href="cart.php">
                                        CART
                                        <img src="Upload/Speedpoint/cart.png" style="width:20%;" alt="cart"/>
                                    </a>
                                </li>
                                <li >
                                    <button onclick="logoutAlert()">
                                    <a href="#">
                                        LOGOUT
                                        <img src="Upload/Speedpoint/user.png" style="width:20%;" alt="user"/>
                                    </a>
                                        </button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_nav stricky-header__top">

            <nav class="navbar navbar-toggleable-md navbar-sticky bootsnav">
                <div class="container">
                    <div class="float-left">

                        <div class="navbar-header " style="padding-left:0px; ">

                            <button class="navbar-toggler " type="button" onclick="window.open('https://www.instagram.com/99_speedmart/')">
                                <i class="ion-social-instagram"></i>
                            </button>

                            <button class="navbar-toggler " type="button" onclick="window.open('https://www.facebook.com/99speedmartMY')">
                                <i class="ion-social-facebook"></i>
                            </button>

                            <button class="navbar-toggler " type="button" onclick="window.open('tel:60105000099')">
                                <i class="ion-ios-telephone"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Start Header Navigation -->
                    <div class="navbar-header clearfix" style="background:#e1e1e1">
                        <button class="navbar-toggler navbar-toggler-right" type="button" id="menu_toggler">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse mobile__nav">
                        <ul class="nav navbar-nav mobile-menu mobile__nav-Ul justify-content-around">
                            <li>
                                <a href="#">About Us</a><span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="About.html">About Us</a>
                                    </li>
                                    <li>
                                        <a href="History.html">Our History</a>
                                    </li>
                                    <li>
                                        <a href="Warehouse.html">Warehouse and Logistics</a>
                                    </li>

                                    <li>
                                        <a href="CSR.html">Corporate Social Responsibility</a>
                                    </li>
                                    <li>
                                        <a href="News.html">Press Room</a>
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="product.php">Products</a>
                            </li>

                            

                            <li>
                                <a href="Speedpoint.html">Speedpoint Services</a>
                            </li>

                            <li>
                                <a href="#">Business With Us</a><span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="Business.html">Business With Us</a>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="#">Careers</a><span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li><a href="Career.html">Careers</a></li>
                                    <li><a href="Vacancy.html">Vacancies</a></li>
                                    <li><a href="Training.html">Training and Human Development</a></li>
                                    <li><a href="Basketballer.html">Semi Pro Basketballer Program</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="Store.html">Locate Us Near You</a>
                            </li>

                            <li>
                                <a href="Contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!--navbar-collapse -->
                </div>
            </nav>
        </div>

    </header>
    <!-- Header end -->

    




<!-- Main Banner start -->
<img src="Upload/Banner/WebsiteBanner.jpg" alt="a" class="rev-slidebg">
<!-- Main Banner end -->
<!-- Promotions start -->
<section id="service" class="pt-60 pb-60 gray-bg mobile-p-0">
    <div class="container">
        <div class="row text-center pb-30">
            <div class="col-sm-12">
                <div class="sec-title center_bdr">
                    <h2><span>Promotions</span> and Offers</h2>
                </div>
            </div>
        </div>

        <div class="row">



            <!--Ad Block 1-->

            <div class="services-block col-lg-8 col-md-8 col-xs-12 plr-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=&#39;active&#39;></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="6" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="7" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="8" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="9" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="10" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="11" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="12" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="13" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="14" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="15" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="16" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="17" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="18" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="19" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="20" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="21" ></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="22" ></li>
                    </ol>
                    <div class="carousel-inner">

                            <!-- item 1 start-->
                            <div class="carousel-item active">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-01.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-01.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-02.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-02.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-08.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-08.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-07.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-07.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-06.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-06.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-09.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-09.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-03.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-03.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-05.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-05.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-04.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-04.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-13.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-13.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-11.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-11.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-12.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-12.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-01.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-01.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_April_02-10.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-10.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_02-01.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_02-01.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-03.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-03.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-07.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-07.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-04.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-04.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-05.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-05.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-06 copy.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-06 copy.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-02.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-02.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-08.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-08.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->
                            <!-- item 1 start-->
                            <div class="carousel-item ">
                                <div class="col-lg-12 col-md-12 col-xs-12 plr-0">
                                    <div class="inner-box hvr-float">
                                        <div class="image">
                                            <img src="Upload/Banner/Regular Promotion_Web_March_05-01.jpg" alt="">
                                            <div class="overlay-box big-box clearfix ">
                                                <div class="text">
                                                    <h3></h3>
                                                    
                                                </div>
                                                    <a href="Upload/Banner/Regular Promotion_Web_March_05-01.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- item 1 end-->

                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--<div class="services-block col-lg-8 col-md-8 col-xs-12 plr-2">
                <div class="inner-box hvr-float">
                    <div class="image">
                        <img src="~/Content/assets/images/ad/ad-01.jpg" alt="">

                        <div class="overlay-box clearfix">

                            <div class="text">
                                <h3>sEnfagrow New Honey Flavour</h3>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.
                            </div>
                            <a href="#!" class="read-more">Read More</a>
                        </div>
                    </div>
                </div>
            </div>-->
            <!--Ad Block 2-->
            <div class="services-block col-lg-4 col-md-4 col-xs-12 mb-sm-30 mb-xs-30 plr-2 ">
                    <div class="inner-box hvr-float ">
                        <div class="image border-bot-4">
                            <img src="Upload/Banner/Regular Promotion_Web_April_02-02.jpg" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    <h4></h4>
                                    
                                </div>
                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-02.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="inner-box hvr-float ">
                        <div class="image border-bot-4">
                            <img src="Upload/Banner/Regular Promotion_Web_April_02-03.jpg" alt="">

                            <div class="overlay-box clearfix">
                                <div class="text">
                                    <h4></h4>
                                    
                                </div>
                                    <a href="Upload/Banner/Regular Promotion_Web_April_02-03.jpg" class="read-more popup-btn" data-fancybox-group="light">Read More</a>
                            </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</section>
<!-- Promotions end-->
<!-- Products Slider start -->
<section id="team" class="fadeIn pt-60 ptb-sm-80 pb-30 text-center">
    <div class="container">

        <div class="row text-center pb-30">
            <div class="col-sm-12">
                <div class="sec-title center_bdr">
                    <h2><span>New</span> Products</h2>
                    <!--<p class="title-text">Just In! See what is the Latest Products</p>-->
                </div>
            </div>
        </div>

        <!--Team Carousel -->
        <div class="row mt-10">
            <div id="team-carousel" class="owl-carousel team-carousel nf-carousel-theme">

                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Product/1209-Prego Mac and Cheese 70g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Prego Mac &amp; Cheese 70g</h5>
                                            <p>RM3.75</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Prego Mac &amp; Cheese 70g</h5>
                                    <p>RM3.75</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Product/1210-Prego Mushroom Carbonara Mac 71g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Prego Mushroom Carbonara Mac 71g</h5>
                                            <p>RM3.75</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Prego Mushroom Carbonara Mac 71g</h5>
                                    <p>RM3.75</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Product/1208-Campbells Soup Cream of Chicken 3x22g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Campbell&#39;s Soup Cream of Chicken 3 x 22g</h5>
                                            <p>RM4.50</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Campbell&#39;s Soup Cream of Chicken 3 x 22g</h5>
                                    <p>RM4.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1201-Vico UHT Minuman Malt Coklat 6 x 200ml.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Vico UHT Minuman Malt Coklat 6 x 200ml</h5>
                                            <p>RM8.50</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Vico UHT Minuman Malt Coklat 6 x 200ml</h5>
                                    <p>RM8.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/levalsh antibacterial wipes 3x20.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Levalsh Antibacterial Wipes 3 x 20s</h5>
                                            <p>RM3.95</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Levalsh Antibacterial Wipes 3 x 20s</h5>
                                    <p>RM3.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Nazri Tepung Goreng Pisang 250g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Nazri Tepung Goreng Pisang 250g</h5>
                                            <p>RM1.95</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Nazri Tepung Goreng Pisang 250g</h5>
                                    <p>RM1.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Dettol Gentle Care Bodywash Refill 850g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Dettol Gentle Care Bodywash Refill 850g</h5>
                                            <p>RM11.49</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Dettol Gentle Care Bodywash Refill 850g</h5>
                                    <p>RM11.49</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Febreze Inspirasi Attar Fabric 370ml.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Febreze Inspirasi Attar Fabric 370ml</h5>
                                            <p>RM11.70</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Febreze Inspirasi Attar Fabric 370ml</h5>
                                    <p>RM11.70</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Breeze Liquid 2in1 Silky Sakura Refill.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Breeze Liquid 2in1 Silky Sakura Refill 3.2kg</h5>
                                            <p>RM17.30</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Breeze Liquid 2in1 Silky Sakura Refill 3.2kg</h5>
                                    <p>RM17.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Breeze Liquid colour care Refill.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Breeze Liquid Colour Care Refill 3.2kg</h5>
                                            <p>RM17.30</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Breeze Liquid Colour Care Refill 3.2kg</h5>
                                    <p>RM17.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1195-Tena proskin pants plus m 9pcs.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Tena Proskin Pants PLus M 9pcs</h5>
                                            <p>RM26.65</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Tena Proskin Pants PLus M 9pcs</h5>
                                    <p>RM26.65</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1196-Tena proskin pants plus L 8pcs.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Tena Proskin Pants Plus L 8pcs</h5>
                                            <p>RM26.65</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Tena Proskin Pants Plus L 8pcs</h5>
                                    <p>RM26.65</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1188-Vinda Deluxe Bathroom Tissue 16rolls.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Vinda Deluxe Bathroom Tissue 16 Rolls</h5>
                                            <p>RM31.65</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Vinda Deluxe Bathroom Tissue 16 Rolls</h5>
                                    <p>RM31.65</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1181-Johnsons Baby Bath Bed Time 750ml.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Johnson&#39;s Baby Bath Bed Time 750ml</h5>
                                            <p>RM16.50</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Johnson&#39;s Baby Bath Bed Time 750ml</h5>
                                    <p>RM16.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/0630 LAYS HOT  SPICY 50G.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Lay&#39;s Hot &amp; Spicy 50g</h5>
                                            <p>RM2.99</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Lay&#39;s Hot &amp; Spicy 50g</h5>
                                    <p>RM2.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/LEVALSH ANTIBAC HAND WASH VANILLA 500ML.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Levalsh Antibac Hand Wash Vanilla 500ml</h5>
                                            <p>RM4.65</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Levalsh Antibac Hand Wash Vanilla 500ml</h5>
                                    <p>RM4.65</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/Pringles Potato Cheddar Cheese USA 158gm.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Pringles Potato Cheddar Cheese USA 158g</h5>
                                            <p>RM5.85</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Pringles Potato Cheddar Cheese USA 158g</h5>
                                    <p>RM5.85</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/4474-Febreze Ambi Pur Downy Scent 370ml.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Febreze Ambi Pur Downy Scent 370ml</h5>
                                            <p>RM10.65</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Febreze Ambi Pur Downy Scent 370ml</h5>
                                    <p>RM10.65</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1177-Schweppes Lemon Lime 320ml.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Schweppes Lemon Lime Can 320ml</h5>
                                            <p>RM2.20</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Schweppes Lemon Lime Can 320ml</h5>
                                    <p>RM2.20</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1448-Nutella Ferrero Biscuits 220cs 304g.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Nutella Ferrero Biscuits (14pcs) 193.2g</h5>
                                            <p>RM13.50</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Nutella Ferrero Biscuits (14pcs) 193.2g</h5>
                                    <p>RM13.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1173-Pure Heaven Apple Juice 1L.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Pure Heaven Orange Juice 1Litre</h5>
                                            <p>RM6.85</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Pure Heaven Orange Juice 1Litre</h5>
                                    <p>RM6.85</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1172-Pure Heaven Apple Juice 1L.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Pure Heaven Apple Juice 1Litre</h5>
                                            <p>RM6.85</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Pure Heaven Apple Juice 1Litre</h5>
                                    <p>RM6.85</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/2396-Downy French Lavender Refill.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Downy French Lavender Refill 1.35L</h5>
                                            <p>RM16.40</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Downy French Lavender Refill 1.35L</h5>
                                    <p>RM16.40</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="team-item box1">
                            <div class="team-item-img">
                                <img src="Upload/Banner/1171-Levalsh Antibacterial Wipes 100s.jpg" alt="" />
                                <div class="team-item-detail">
                                    <div class="team-item-detail-inner light-color">
                                        <h5>Levalsh  Antibacterial Wipes 100s</h5>
                                            <p>RM4.85</p>
                                        <a href="Product.html" class="btn btn-md btn-white-line  mt-15">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-item-info">
                                <h5>Levalsh  Antibacterial Wipes 100s</h5>
                                    <p>RM4.85</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
        <!--End Team Carousel -->
    </div>
</section>
<!-- Products Slider end -->
<!-- Speedpoint start -->
<section id="speedpoint" class="fadeIn pt-60 ptb-sm-80 pb-60 text-center">
    <div>
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="sec-title center_bdr">
                        <h2><img src="Content/assets/images/logo-speedpoint.png" alt="" style="max-width:350px" class="img-responsive"></h2>
                        <p class="title-text">Your point of convenience!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-sm-30 mb-sm-30 mb-xs-30 mt-xs-30 plr-2">
                    <a href="/Speedpoint#express-meal"><img src="Content/assets/images/ban-express-meal.png" alt=""></a>
                </div>

                <div class="col-lg-4 mb-sm-30 mb-xs-30 plr-2">
                    <a href="/Speedpoint#bill"><img src="Content/assets/images/ban-bill-payment.png" alt=""></a>
                </div>

                <div class="col-lg-4 plr-2">
                    <a href="/Speedpoint#prepaid">
                        <img src="Content/assets/images/ban-mobile-prepaid.png" alt="">
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!--  Speedpoint end -->
<!-- Know More start -->
<section id="about" class="fadeIn pt-60 ptb-sm-80 pb-60 text-center">
    <div class="padding project-section pt-30 ptb-xs-40">
        <div class="container">
            <div class="row text-center pb-30">
                <div class="col-sm-12">
                    <div class="sec-title center_bdr">
                        <h2><span>More </span>About Us</h2>
                        <p class="title-text">Learn more about who we are and what we do</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-4 mt-sm-30 mb-xs-30 mb-30 plr-2">
                    <div class="about_box">
                        <figure>
                            <a href="History.html"><img src="Content/assets/images/ban-history.jpg" alt="" /></a>
                        </figure>
                        <div class="about_col">
                            <h4>Our History</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-sm-30 mb-30 plr-2">
                    <div class="about_box">
                        <figure>
                            <a href="CSR.html"><img src="Content/assets/images/ban-recycling-centre.jpg" alt="" /></a>
                        </figure>
                        <div class="about_col">
                            <h4>Corporate Social Responsibility</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-sm-30 mb-30 plr-2">
                    <div class="about_box">
                        <figure>
                            <a href="News.html"><img src="Content/assets/images/ban-news.jpg" alt="" /></a>
                        </figure>
                        <div class="about_col">
                            <h4>Press Room</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!--  Know More end -->



    <!-- Footer start -->
    <footer class="footer pt-80 pt-xs-40">
        <div class="container">
            <div class="row footer-info mb-60">
                <div class="col-lg-4 col-md-4 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-uppercase"><a href="Contact.html">Contact Us</a></h4>
                    <address>
                        <i class="ion-ios-location fa-icons"></i>
                        <strong>99 SPEED MART SDN BHD (519537-X)</strong><br />
                        Lot PT 2811, Jalan Angsa,<br />
                        Taman Berkeley, 41150 Klang,<br />
                        Selangor D.E., Malaysia.
                    </address>
                    <address>
                        <i class="ion-ios-contact fa-icons"></i>
                        <strong>CUSTOMER HOTLINE</strong><br />
                        <a href="tel:60105000099">6010-5000099</a>
                    </address>
                    <ul class="link-small">
                        <li>
                            <a href="mailto:customer_service@99speedmart.com.my"><i class="ion-ios-email fa-icons"></i>customer_service@99speedmart.com.my</a>
                        </li>
                        <li>
                            <a><i class="ion-ios-telephone fa-icons"></i>603 3362 6863</a>
                        </li>
                    </ul>
                    <div><strong>FOLLOW US ON</strong></div>
                    <div class="icons-hover-black pb-30">
                        <a href="https://www.facebook.com/99speedmartMY" target="_blank"><img src="Content/assets/images/ico-facebook.png" alt=""></a><a href="https://www.instagram.com/99_speedmart/"> <img src="Content/assets/images/ico-instagram.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-uppercase">Links</h4>
                    <ul class="link blog-link">
                        <li>
                            <a href="home.html">Home</a>
                        </li>
                        
                        <li>
                            <a href="Product.html">Products</a>
                        </li>
                        <li>
                            <a href="Speedpoint.html">Speedpoint Services</a>
                        </li>
                        <li>
                            <a href="Store.html">Locate Us</a>
                        </li>
                        <li>
                            <a href="/Legal">Legal</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-uppercase"><a href="About.html">About Us</a></h4>
                    <ul class="link blog-link">
                        <li>
                            <a href="History.html">Our History</a>
                        </li>
                        <li>
                            <a href="Warehouse.html">Warehouse and Logistics</a>
                        </li>
                        <li>
                            <a href="CSR.html">Corporate Social Responsibility</a>
                        </li>
                        <li>
                            <a href="News.html">Press Room</a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-uppercase"><a href="Business.html">Business With Us</a></h4>
                   
                </div>
                <div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
                    <h4 class="mb-30 text-uppercase"><a href="Career.html">Careers</a></h4>
                    <ul class="link blog-link">
                        <li>
                            <a href="Vacancy.html">Vacancies</a>
                        </li>
                        <li>
                            <a href="Training.html">Training and Human Development</a>
                        </li>
                        <li>
                            <a href="Basketballer.html">Semi Pro Basketballer Program</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- Copyright Bar start -->
        <div class="copyright">
            <div class="container">
                <p class="">
                    Copyright © 99 Speedmart. All rights reserved. Powered by <a href="http://www.equatosolutions.com" target="_blank">Equato Solutions Sdn Bhd</a>.
                </p>
            </div>
        </div>
        <!-- Copyright Bar end -->
    </footer>
    <!-- Footer end -->
    <!-- Back to top start -->
    <div id="gotop"></div>
    <script>
        $('#gotop').gotop({
            customHtml: '<i class="fa fa-angle-up fa-2x"></i>',
            bottom: '2em',
            right: '2em'
        });
    </script>
    <!-- Back to top end -->

    
    <script>
        function openFile(path) {
            alert(path);
            var win = window.open(url, '_blank');
            win.focus();
        }
    </script>


</body>
</html>


