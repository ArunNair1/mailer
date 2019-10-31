<!DOCTYPE html>

<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="TopGym Template">
    <meta name="keywords" content="TopGym, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Be Fit | We Are Coming</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,700,900" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
	
</head>

<body>


<?php
$to      = "Akhiltev@gmail.com";
$subject = 'the subject';
$message = 'hello';

mail($to, $subject, $message, $headers);
?> 

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div><!--
                        <nav class="mobile-menu">
                            <ul>
                                <li><a href="./index.html">Home</a></li>
                                <li><a href="./about-us.html">About us</a></li>
                                <li><a href="./classes.html">Classes</a></li>
                                <li><a href="./elements.html">Instructors</a></li>
                                <li><a href="./blog.html">News</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                                <li class="search-btn search-trigger"><i class="fa fa-search"></i></li>
                            </ul>
                        </nav>-->
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- Top Social Begin -->
    <div class="top-social">
        <div class="top-social-links">
            <ul>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.facebook.com/BeFit-India-115573539829245/" target="_blank"><i class="fa fa-facebook"></i></a></li>
             <!--   <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
            </ul>
        </div>
    </div>
    <!-- Top Social End -->
    <!-- Hero Slider Section Begin -->
    <section class="hero-slider">
        <div class="slide-items owl-carousel">
            <div class="single-slide set-bg active" style="width: auto" data-setbg="img/bg.jpg">
            
                <h1>Be Fit.Top Fitness</h1>
                
            </div>
            <div class="single-slide set-bg" data-setbg="img/bg-2.jpg">
                <h1>Be Fit.Top Health</h1>
                
            </div>
            <div class="single-slide set-bg" data-setbg="img/bg-3.jpg">
                
                <h1>Be Fit.Top Body</h1>
                
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->
	
    <!-- Upcoming Event End -->
    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" style="height:auto" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-content">
                        <div class="footer-menu">
						<br><br>
						<h1 style="color:#fff">If you don't follow us for your Fitness Journey, you'll be Sorry</h1>
                        </div>
						
                        <div class="subscribe-form">
                            <form name="contact" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 
                                <input type="text" placeholder="your Email">
                                <button type="submit">Sign Up </button>
                            </form>
                        </div>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/BeFit-India-115573539829245/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </div>
                        <div class="copyright">
                            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved @Klique
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>
</body>

</html>