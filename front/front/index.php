<?php 
  session_start();
include('connect.php');

    if(isset($_POST['userrlogin'])){
			$uname = $_POST['username'];
			$pass = $_POST['pass'];
			$query = "select * from users where name='$uname' and password='$pass'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
				if(!empty($row['name']) AND !empty($row['password'])){
	echo "<script>alert('Login Successful')</script>";
	$_SESSION['id'] = $row['id'];
	$_SESSION['email'] = $row['email'];
      header("location:user_profile.php");
				}else
				{
					echo "<script>alert('Invalid ID or Password')</script>";
					header("location:index.php?err_msg=err_msg");
				}
    }
?>


<!DOCTYPE html>
<html lang="en">



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
    <!-- Start page loader -->
    <div id="page-loader">
        <div class="page-loader__spinner"></div>
    </div>
    <!-- End page loader -->

    <header id="header">
        <div class="header__top">
            <div class="container">
                <ul class="top-nav">
				<?php if (empty(@$_SESSION['id'])){ ?>
                  <!--  <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#">Register</a>

                        <form class="dropdown-menu stop-propagate" name = "signup" action = "add_login.php" method = "post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="u_name">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="u_email">
                                <i class="form-group__bar"></i>
                            </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name = "u_password">
                                <i class="form-group__bar"></i>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Contact" name = "u_contact">
                                <i class="form-group__bar"></i>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Adress" name = "u_address">
                                <i class="form-group__bar"></i>
                            </div>
                            

                            <p><small>By Signing up with HMS, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                            <button type="submit" name="add_login" class="btn btn-primary btn-block m-t-10 m-b-10">Register</button>

                          

                        </form>
                    </li>-->
					
                    <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

                        <div class="dropdown-menu">
                            <div class="tab-content">
                                <form class="tab-pane active in fade" action="index.php" name="home" method="post"  id="top-nav-login">
                                   
                                    <div class="form-group">
                                        <input name="username" id="username" type="text" class="form-control" placeholder="Email Address">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <input name="pass" id="password" type="password" class="form-control" placeholder="Password">
                                        <i class="form-group__bar"></i>
                                    </div>
										<?php
										if(@$_GET['err_msg']){
										?>
										<span class="text-danger">Login Failed! Username or password incorrect!</span>
										<?php	
										}
										?>
                                    <input type="submit" name="userrlogin" class="btn btn-primary btn-block m-t-10 m-b-10">Login</button>

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
                    </li><?php } ?>
					<?php if (!empty(@$_SESSION['id'])){ ?>
                    <li class="pull-left top-nav__icon">
                        <a href="user_profile.php">User Panel</a>
                    </li><?php } ?>

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
                    	
						<li><a href="index.php">Home</a></li>
	
                        <li><a href="plots.php">Plots</a></li>
                        
                        <li><a href="house.php">House</a></li>
                        
                   		<li><a href="services.php">Service</a></li>
                        
                        <li><a href="contact_us.php">Contact</a></li>

                        <li><a href="about_us.php">About Us</a></li>
                        
                </ul>
            </div>
        </div>

        <div class="header__search container">
            <form>
                <div class="search">
                    <div class="search__type dropdown">
                        <a href="#" data-toggle="dropdown">Select <i class="zmdi zmdi-chevron-down"></i></a>

                        <div class="dropdown-menu">
                            <div>
                                <input type="radio" name="property-type" value="rent">
                                <span>Plots</span>
                            </div>
                            <div>
                                <input type="radio" name="property-type" value="buy">
                                <span>House</span>
                            </div>
                        </div>
                    </div>

                    <div class="search__body">
                        <input type="text" class="search__input" placeholder="Search..." data-rmd-action="advanced-search-open">

                        <!--<div class="search__advanced">
                            <!--<div class="col-sm-6">
                                <div class="form-group form-group--float">
                                    <input type="text" class="form-control" value="Karachi, Pakistan">
                                    <label>Location</label>
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Ownership Type</label>

                                    <select class="select2">
                                            <option value="">Residental</option>
                                            <option value="">Commercial</option>
                                           
                                            <option value="">Apartment</option>
                                            <option value="">Room</option>
                                            <option value="">Plots</option>
                                        </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group form-group--range">
                                    <label>Price Range</label>
                                    <div class="input-slider-values clearfix">
                                        <div class="pull-left"><span>Rs.</span><span id="property-price-upper"></span></div>
                                        <div class="pull-right"><span>Rs.</span><span id="property-price-lower"></span></div>
                                    </div>
                                    <div id="property-price-range"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group form-group--range">
                                    <label>Area Size (sqft)</label>
                                    <div class="input-slider-values clearfix">
                                        <div class="pull-left" id="property-area-upper"></div>
                                        <div class="pull-right" id="property-area-lower"></div>
                                    </div>
                                    <div id="property-area-range"></div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed1">1
                                            </label>
                                        <label class="btn active">
                                                <input type="checkbox" name="advanced-search-beds" id="bed2" checked>2
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed3">3
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed4">4
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-beds" id="bed5">4+
                                            </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Floor</label>
                                    <div class="btn-group btn-group-justified" data-toggle="buttons">
                                        <label class="btn active">
                                                <input type="checkbox" name="advanced-search-baths" id="bath1" checked>1
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath2">2
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath3">3
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath4">4
                                            </label>
                                        <label class="btn">
                                                <input type="checkbox" name="advanced-search-baths" id="bath5">4+
                                            </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 m-t-10">
                                <button class="btn btn-primary">Search</button>
                                <button class="btn btn-link" data-rmd-action="advanced-search-close">Cancel</button>
                            </div>
                        </div>-->
                    </div>
                </div>
            </form>
        </div>



        <div class="header__recommended">
            <div class="my-location">
                <div class="my-location__title">Properties In Hamdard Housing Society</div>
                <div class="dropdown my-location__location hidden-xs">
                    <a href="#" data-toggle="dropdown"><i class="zmdi zmdi-pin"></i> Hamdard University</a>

                    <div class="dropdown-menu pull-right stop-propagate">
                        <strong>Change Location</strong>
                        <small>Set your location to get list of properties nearby you</small>

                        <form>
                            <div class="form-group form-group--float">
                                <input type="email" class="form-control" placeholder="Enter City, State, Zip">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="my-location__map">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.478702036886!2d67.00703731542343!3d25.085651983948214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3429afcf1836b%3A0x336aa33d7030e57!2sHamdard+University!5e0!3m2!1sen!2s!4v1513091877776" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

            <div class="listings-grid">
                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/1.jpg" alt="">
                            <div class="listings-grid__price">Rs.1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.1  </small>
                            <h5>House No H-98</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/2.jpg" alt="">
                            <div class="listings-grid__price">Rs.1,200,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.2</small>
                            <h5>House No T-10</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/3.jpg" alt="">
                            <div class="listings-grid__price">Rs.910,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.2</small>
                            <h5>House No R-121</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/4.jpg" alt="">
                            <div class="listings-grid__price">Rs.2,542,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.3</small>
                            <h5>House No R-49 </h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/5.jpg" alt="">
                            <div class="listings-grid__price">Rs.823,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.3 </small>
                            <h5>House NO L-78</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/6.jpg" alt="">
                            <div class="listings-grid__price">Rs.1,120,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.4</small>
                            <h5>House No A-55</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/7.jpg" alt="">
                            <div class="listings-grid__price">Rs.3,000,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.5</small>
                            <h5>House No 111</h5>
                        </div>


                    </a>

                    <div class="actions listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>

                <div class="listings-grid__item">
                    <a href="#">
                        <div class="listings-grid__main">
                            <img src="img/demo/listing/thumbs/8.jpg" alt="">
                            <div class="listings-grid__price">Rs.1,175,000</div>
                        </div>

                        <div class="listings-grid__body">
                            <small>Street No.6</small>
                            <h5>House no 112</h5>
                        </div>


                    </a>

                    <div class="listings-grid__favorite">
                        <div class="actions__toggle">
                            <input type="checkbox">
                            <i class="zmdi zmdi-favorite-outline"></i>
                            <i class="zmdi zmdi-favorite"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section">
        <div class="container">
            <header class="section__title">
                <h2>Properties for Sale & Real Estate</h2>
                <small>Villas, Apartments, Plots, Office Spaces and Commercial Builsings</small>
            </header>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card__header card__header--minimal">
                            <h2>Recent Properties for Sale</h2>
                            <small>Your Lifestyle Destination</small>
                        </div>

                        <div class="grid-widget grid-widget--listings">
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h3>Rs.</h3>
                                        <small>Karachi, Pakistan</small>
                                    </div>
                                </a>
                            </div>
                            
                          
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h3>Rs.990,000</h3>
                                        <small>Karachi, Pakistan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h3>1,500,000</h3>
                                        <small>21 Shop St, Karachi</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h3>Rs.1,650,690</h3>
                                        <small>13 Murre Hills, CA 01210</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a class="view-more" href="grid-listings.html">
                                View all properties for sale <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card__header card__header--minimal">
                            <h2>Recent Plots for Sale</h2>
                            <small>Make your own desired home</small>
                        </div>

                        <div class="grid-widget grid-widget--listings">
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" class="img-responsive" alt="">
                                    <div class="grid-widget__info">
                                        <h3>Rs.1,810,000</h3>
                                        <small>4313 Murre Hills, Pakistan</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">
                                    <div class="grid-widget__info">
                                        <h3>Rs.1,782,890</h3>
                                        <small>700 DHA St,Karachi</small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">
                                    <div class="grid-widget__info">
                                        <h3>Rs.823,000</h3>
                                        <small>1100 Sea View,Karachi, </small>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-6">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/listing/thumbs/house_1.jpg" alt="">
                                    <div class="grid-widget__info">
                                        <h3>Rs.2,543,000</h3>
                                        <small>132 04th St, Karachi</small>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a class="view-more" href="grid-listings.html">
                                View all properties for rent <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card__header card__header--minimal">
                            <h2>On Location Facilities</h2>
                            <small>We provide state of the art facilities within the closed boundries of our project.</small>
                        </div>

                        <div class="grid-widget grid-widget--listings">
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/gym2.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Gymnasium </h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/park.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Family Park</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/masjid.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Masjid</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/market.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Super Market</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/swimming.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Swimming Pool</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/roads.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Wide Roads</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/cam2.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Security System</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/stadium.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Match Stadium</h4>

                                    </div>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/locations/mall.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Shopping Mall</h4>

                                    </div>
                                </a>


                            </div>

                        </div>

                        <a class="view-more" href="#">
                                View More About US <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card__header card__header--minimal">
                            <h2>Our Trusted Agencies</h2>
                            <small>Find Real State Agencies</small>
                        </div>

                        <div class="grid-widget grid-widget--listings">
                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/consult.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Consult n deal</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/rayyan.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Rayyan Real Invester</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/Land.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Land Marketing</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/Estate 4u.jpg" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Estate 4U</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/Bajwa.jpg" height="165" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Properties sarfraz</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-xs-4">
                                <a class="grid-widget__item" href="#">
                                    <img src="img/demo/people/Sas pak.jpg" height="165" alt="">

                                    <div class="grid-widget__info">
                                        <h4>Saspak Properties</h4>
                                        <small>03123456789</small>
                                    </div>
                                </a>
                            </div>
								
							
                        </div>
                        <br>
                         <a class="view-more" href="agents.html">
                                View all agents <i class="zmdi zmdi-long-arrow-right"></i>
                            </a>
                    </div>

                   

                </div>
            </div>
        </div>
        </div>
    </section>

<footer id="footer">
        <div class="container hidden-xs">
            <div class="row">
                <div class="col-sm-6">
                    <div class="footer__block">
                        <a class="logo clearfix" href="#">
                            <div class="logo__text">
                                <span>HSRMS</span>
                                <span> Real Estate</span>
                            </div>
                        </a>

                        <address class="m-t-20 m-b-20 f-14">
                                Sharae Madinat Al-Hikmah,
                                 Karachi
                            </address>

                        <div class="f-20">+92-313-318-3973</div>
                        <div class="f-14 m-t-5">info@hsrms.com</div>

                        <div class="f-20 m-t-20">
                            <a href="#" class="m-r-10"><i class="zmdi zmdi-google"></i></a>
                            <a href="#" class="m-r-10"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-6">
                    <div class="footer__block">
                        <div class="footer__title">About HSRMS</div>

                        <div>
With dogged determination and sheer hard work, HSRMS Builders and Developers has established itself as a market leader in the field of building and construction. Under the astute guidance of Mr. Osama Shahid and Ms. Sana Khan, who are the moving force behind the success achieved, our group has earned decades of valuable experience running businesses devoted to providing uncompromising quality in all our products and services. With unparalleled and sustained success in the Motor Industry, Travel and Tourism, Radio Cabs, Real Estate and Security Industry, Centrals Builders and Developers is well on its way to become another jewel in the crown. 
...<a href="about_us.php">More</a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <span class="footer__copyright">© HSRMS Real Estates</span>

                
            </div>

            <div class="footer__to-top" data-rmd-action="scroll-to" data-rmd-target="html">
                <i class="zmdi zmdi-chevron-up"></i>
            </div>
        </div>
    </footer>


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