<!doctype html>
<?php
session_start();
?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HSRMS</title>
      
    <link rel="icon" href="img/HSRMS-logo.png" sizes="32x32">

      <!-- Vendors -->

    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

    <!-- Slick Carousel -->
    <link rel="stylesheet" href="vendors/bower_components/slick-carousel/slick/slick.css">

    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

    <!-- Site -->
    <link rel="stylesheet" href="css/app_1.min.css">
    <link rel="stylesheet" href="css/app_2.min.css">

    <!-- Page Loader JS -->
    <script src="js/page-loader.min.js" async></script>
    <script src='../../../google_analytics_auto.js'></script>
</head>

<body>

    <header id="header">
        <div class="header__top">
            <div class="container">
                <ul class="top-nav">
				<?php if (empty(@$_SESSION['id'])){ ?>
                    <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#">Register</a>

                        <form class="dropdown-menu stop-propagate">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Confirm Password">
                                <i class="form-group__bar"></i>
                            </div>

                            <p><small>By Signing up with HMS, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                          

                        </form>
                    </li>

                    <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

                        <div class="dropdown-menu">
                            <div class="tab-content">
                                <form class="tab-pane active in fade" id="top-nav-login">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <button class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

                                    <div class="text-center">
                                        <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                    </div>

                                   
                                </form>

                                <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                    <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                  

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Emaill Address">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <button class="btn btn-warning btn-block">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </li>
				<?php } ?>
				<?php if (!empty(@$_SESSION['id'])){ ?>
                     <li class="pull-right top-nav__icon">
                        <a href="logout.php"><i class="zmdi zmdi-facebook"></i>Logout</a>
                    </li>
				<?php } ?>

                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    </li>
                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                    </li>
                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-google"></i></a>
                    </li>

                    <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>info@hsrms.com</span></li>
                    <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>+92-313-318-3973</span></li>
                </ul>
            </div>
        </div>

        <div class="header__main">
            <div class="container">
                <a class="logo" href="index.php">
                    <img src="img/HSRMS-logo.png" alt="">
                    <div class="logo__text">
                        <span>HSRMS</span>
                        <span> Housing Society<br>Record Management System</span>
                    </div>
                </a>

                <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                    <i class="zmdi zmdi-menu"></i>
                </div>

                <ul class="navigation">
                    <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
					
                     
                    
                    
                    	<li><a href="index.php">Home</a></li>
                        <li><a href="plots.php">Plots</a></li>
                     	<li><a href="house.php">House</a></li>
						<li><a href="services.php">Service</a></li>
                        <li><a href="contact_us.php">Contact</a></li>
						<li><a href="about_us.php">About Us</a></li>
                        
                        

                        <!--  <li class="navigation__dropdown">
                            <a href="#" class="prevent-default">About Us</a>

                              <ul class="navigation__drop-menu navigation__drop-menu--right">
								<li><a href="profile.html">Profile Private</a></li>
                            </ul> 
                        </li>-->
                </ul>
            </div>
        </div>
    </header>
    
    
    
      <!-- Javascript -->

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Waves button ripple effects -->
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

    <!-- Select 2 - Custom Selects -->
    <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- Slick Carousel - Custom Alerts -->
    <script src="vendors/bower_components/slick-carousel/slick/slick.min.js"></script>

    <!-- NoUiSlider -->
    <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

    <!-- IE9 Placeholder -->
    <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

    <!-- Site functions and actions -->
    <script src="js/app.min.js"></script>

    <!-- Demo only -->
    <script src="js/demo/demo.js"></script>
</body>
</html>
