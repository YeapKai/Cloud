
<!DOCTYPE html>
<html lang="en">
<?php
        // put your code here
        require 'config.php';
 // set the limit to 5 minutes
        //$conn = mysqli_connect("localhost","root","","99speedmartdb");
        $host = "localhost";
        $db_name = "99speedmart";
        $username = "root";
        $password = "";
        $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        
        ?>
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
                                <a href="Product.html">Products</a>
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

    



<!-- Page Banner start -->
<div class="page-header parallax-products" style="background-color: #00CED1;">
    <div class="container">
        <h1 class="title">Products</h1>
    </div>
    <div class="breadcrumb-box">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="home.php">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Products
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Banner end -->
<!-- Content start -->

<section class="analyzed_wrap__block pb-38 ">

    <div class="container pt-30">
        <div class="row text-center pb-30 pb-xs-0">
            <div class="col-sm-12">
                <div class="sec-title center_bdr">
                    <h2>Products</h2>
                    <p class="title-text ">Just In! See what is the Latest Products</p>
                </div>
            </div>
        </div>
    </div>
    
       <div class="container">
        <div class="row mt-10">
<?php
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($result)){

            ?>
            <div class="col-md-3 col-sm-6 item">
                    <div class="team-item box1">
                        <div class="team-item-img">
                            <img src="<?=$row['Product_Url']?>" alt="" />
                        </div>
                        <div class="team-item-info">
                            <h5><?=$row['Product_Name']?></h5>
                                <p>RM<?=$row['Product_Price']?></p>
                        </div>
                        <form method="POST" action="product.php?id=<?=$row['Product_Id']?>">
                        <input type="hidden" name="name" value="<?= $row['Product_Name']?>"/>
                        <input type="hidden" name="price" value="<?= $row['Product_Price']?>"/>
                        <input type="hidden" name="url" value="<?= $row['Product_Url']?>"/>
                        <input type="number" name="quantity" value="1"/>
                        <input type="submit" style="border:1px solid black; text-align: center;" name="add_to_cart" value="Add To Cart"/>
                        </form>
                    </div>
                </div>
            <?php }?>

        </div>

</section>
<?php
            
//            $query = $db->prepare("INSERT INTO cart VALUES (:password,:username,:name,:me,:new_password)");
$query = $db->prepare("INSERT INTO cart (ORDER_NAME,ORDER_PRICE,ORDER_QUANTITY,ORDER_URL,PRODUCT_ID) VALUES (:password,:username,:name,:me,:new_password)");          
//             echo $_POST['url'];
            $query->bindParam(':password', $_POST['name']);
             $query->bindParam(':username',$_POST['price']);
             $query->bindParam(':name',$_POST['quantity']);
             $query->bindParam(':me', $_POST['url']);
            $query->bindParam(':new_password', $_GET['id']); 
            if( $_GET['id']!= null){
            $query->execute();
            }

         ?>
<!--Content end-->

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