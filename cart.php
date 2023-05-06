<?php
require 'config.php';

$host = "localhost";
        $db_name = "99speedmart";
        $username = "root";
        $password = "";
        $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
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
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="Content/assets/css/fancybox.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


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
    <script>
                                                            function refreshPage() {
                                                                location.reload();
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
                    <!-- Collect the nav links, forms, and other content for toggling -->
                </div>
            </nav>
                </div>
                    </header>
                    <div class="container-fluid mt-5">
                        <h2 class="mb-5 text-center">Shopping Cart</h2>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="table-responsive">
                                    <table id="myTable" class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Name</th>
                                                <th>QTY</th>
                                                <th>Price</th>
                                                <th class="text-right">
                                                    <span id="amount" class="amount">
                                                        Amount
                                                    </span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ttl = 0;
                                            $subtotal = 0;
                                            $sql = "SELECT * FROM cart";
                                    $result = mysqli_query($conn,$sql);
            
                                while($row = mysqli_fetch_array($result)){
                                            ?>
                                            <tr>
                                                <td>
                                                    <div class="product-img">
                                                        <div class="img-prdct">
                                                            <img src="<?=$row['Order_Url']?>" alt="" style="width:40%;">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p><?=$row['Order_Name']?></p>
                                                </td>
                                                <td>
                                                    <div class="button-container">
                                                        
                                                        <input type="text" name="qty" min="0" class="qty form-control" value="<?=$row['Order_Quantity']?>"/>
                                                        
                                                        </div>
                                                        </td>
                                                        <td>
                                                            <input type="text" value="<?=$row['Order_Price']?>" class="price form-control" disabled>
                                                        </td>
                                                        <?php
                                                        $price = $row['Order_Price'];
                                                        $quantity = $row['Order_Quantity'];
                                                        $ttl = $price * $quantity;
                                                        $subtotal += $ttl;
                                                        ?>
                                                        <td align="right">$ <span id="amount" class="amount"><?=$ttl?></span></td>
                                                        <td>
                                                            <form onclick="refreshPage()" action="cart.php?id=<?=$row['Product_Id']?>" method="post">
                                                                <input type="submit" name="delete" value="delete"/>
                                                            </form>
                                                        </td>
                                            </tr>

                                                        </tbody>
                                                        <?php

                                                        $query = $db->prepare("delete from cart WHERE PRODUCT_ID = :password ");

                                        $query->bindParam(':password', $_GET['id']);


                                         $query->execute();

                        ?>
                                            
                                            </tr>
                                            
                                                        </tbody>
                                                        <?php
                                                        
                        }?>
                                                        <tfoot>
                                                            <tr>
                                                               
                                                                <td colspan="4"></td>
                                                                <td align="right">
                                                                    <strong>TOTAL = $<span id="total" class="total"><?=$subtotal?></span></strong>
                                                                </td>
                                                        
                                                                <td>
                                                                
                                                                    <form action="payment.php" method="post">
                                                                    <input type="hidden" name="total" value="<?= $subtotal?>"/>
                                                                    <button type="submit" name="submit" style="border:1px solid black">Purchase</button><br/>
                                                                    </form>
                                                                 
                                                                    </td>
                                                                   
                                                            </tr>
                                                        </tfoot>
                                                        </table>
                                                        </div>
                                                    </div>
                                    </div>
                            </div>
                        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                        <script src="script.js"></script>
                    </body>
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
                
 
</html>
