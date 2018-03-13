<?php
	session_start();
?>


<?php
	session_start();

	include 'connectdb.php';

	$q = $_GET['q'];

	$sql = "select * from book_upload bu, img_upload iu where bu.img_id = iu.img_id and bu.book_id = $q";
	
	$res = mysql_query($sql) or die(mysql_error());	

	$row = mysql_fetch_array($res);

$isbn = $row['isbn'];
$title = $row['title'];
$author = $row['author'];
$lang = $row['lang'];
$rel_date = $row['rel_date'];
$pages = $row['pages'];
$cat = $row['cat_id'];
$type = $row['type'];
$cond = $row['book_cond'];
$descp = $row['descp'];
$subtitle = $row['subtitle'];
$price = $row['price'];
$publisher = $row['publisher'];
$img = $row['img_path_1'];

?>

<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HMS - Real Estate</title>

    <!-- Vendors -->

    <!-- Material design colors -->
    <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

    <!-- CSS animations -->
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

    <!-- Select2 - Custom Selects -->
    <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

    <!-- NoUiSlider - Input Slider -->
    <link rel="stylesheet" href="vendors/bower_components/nouislider/distribute/nouislider.min.css">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="vendors/bower_components/lightgallery/dist/css/lightgallery.min.css">

    <!-- rateYo - Ratings -->
    <link rel="stylesheet" href="vendors/bower_components/rateYo/src/jquery.rateyo.css">

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

    <?php include "header.php"; ?>
    
    <?php 
                        include "connect.php";
                        $qry = "SELECT house.house_id,img_upload.img_id,img_upload.img_path_1,img_upload.img_path_2,img_upload.img_path_3, payment.total_payments,payment.installment_1,payment.installment_2,payment.installment_3,payment.installment_4, cat.cat_name, society.sty_name, house.city, house.property_type, house.describtion, house.location, house.price,house.land_area,house.unit,house.garages,house.flor,house.bedroom,house.bathroom FROM house, img_upload, cat, society, payment where house.cate_id = cat.cat_id and house.soc_id = society.id ";
                         $run = mysqli_query($conn,$qry);
                         $sno = 0;
                         if($row = mysqli_fetch_assoc($run)){?> 
     
    <section class="section">
        <div class="container">
            <header class="section__title section__title-alt">
                <h2>152 Sq Yard Villa For Sale In Town Karachi</h2>
                <small> Town - Precinct 2, Town Karachi, Karachi</small>

                <div class="actions actions--section">
                    <a href="#" data-rmd-action="print"><i class="zmdi zmdi-print"></i></a> 
                </div>
            </header>
            


            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="detail-media">
                            <div class="tab-content">
                                <div class="tab-pane fade in active light-gallery" id="detail-media-images">
                                    <a href="img/demo/listing/1.jpg">
                                        <img src="<?php echo $row['img_path_1']?>" alt="">
                                    </a>
                                    <a href="img/demo/listing/1.jpg">
                                        <img src="<?php echo $row["img_path_2"]; ?>" alt="">
                                    </a>
                                    <a href="img/demo/listing/1.jpg">
                                        <img src="<?php echo $row["img_path_3"]; ?>" alt="">
                                    </a>
                                   
                                </div>
                                <div class="tab-pane fade" id="detail-media-map">
                                    <div id="listing-map"></div>
                                </div>
                            </div>

                            <ul class="detail-media__nav hidden-print">
                                <li class="active"><a href="#detail-media-images" data-toggle="tab"><i class="zmdi zmdi-collection-image"></i></a></li>
                                <li><a href="#detail-media-map" data-toggle="tab"><i class="zmdi zmdi-map"></i></a></li>
                            </ul>
                        </div>
                        
                        
                        <div class="detail-info">
                            <div class="detail-info__header clearfix">
                                <strong>RS.<?php echo $row['price'];?>/=</strong>
                                

                                <span>For Sale</span>
                            </div>

                            <ul class="detail-info__list clearfix">
                                <li>
                                    <span>Category</span>
                                    <span><?php echo $row['cat_name'];?></span>
                                </li>
                                <li>
                                    <span>City</span>
                                    <span><?php echo $row['city']?></span>
                                </li>
                                <li>
                                    <span>Society</span>
                                    <span><?php echo $row['sty_name']?></span>
                                </li>
                                <li>
                                    <span>Location</span>
                                    <span><?php echo $row['location'];?></span>
                                </li>
                                   
                                <li>
                                    <span>Property Type</span>
                                    <span><?php echo $row['property_type']?></span>
                                </li>
                                <li>
                                    <span>Garages</span>
                                    <span><?php echo $row['garages'];?></span>
                                </li>
                                <li>
                                    <span>Floors</span>
                                    <span><?php echo $row['flor'];?></span>
                                </li>
                                <li>
                                    <span>Bedrooms</span>
                                    <span><?php echo $row['bedroom'];?></span>
                                </li>
                                <li>
                                    <span>Bathrooms</span>
                                    <span><?php echo $row['bathroom'];?></span>
                                </li>
                                <li>
                                    <span>Land Area</span>
                                    <span><?php echo $row['land_area'];?></span>
                                </li>
                                <li>
                                    <span>Unit</span>
                                    <span><?php echo $row['unit'];?></span>
                                </li>
                            </ul>
                        </div>
                     
					</div>

                    <div class="card">
                        <div class="card__header">
                            <h2>Property Overview</h2>
                        </div>
                        <div class="card__body">
                            <p><?php echo $row['describtion'];?></p>
                        </div>
                    </div>

                    <?php }?> 
                </div>

                <div id="inquire" class="col-md-4 rmd-sidebar-mobile">
                    <form class="card hidden-print">
                        <div class="card__header">
                            <h2>Inquire this Proeprty</h2>
                            <small>Call us now or send us your information</small>
                        </div>

                        <div class="card__body">
                            <div class="inquire__number">
                                <i class="zmdi zmdi-phone"></i> +92 333 1234567
                            </div>

                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Name</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Email Address</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <input type="text" class="form-control">
                                <label>Contact Number</label>
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group form-group--float">
                                <textarea class="form-control textarea-autoheight"></textarea>
                                <label>Message</label>
                                <i class="form-group__bar"></i>
                            </div>

                            <small class="text-muted">By sending us your information, you agree to HMS's Terms of Use & Privacy Policy.</small>
                        </div>

                        <div class="card__footer">
                            <button type="submit" class="btn btn-primary">Request Information</button>
                            <button class="btn btn-link hidden-lg hidden-md" data-rmd-action="block-close" data-rmd-target="#inquire">Cancel</button>
                        </div>
                    </form>

                   
                </div>
            </div>
        </div>
    </section>
    
   <?php include "footer.php"; ?>

    <!-- Listing Search -->
    <button class="btn btn--action btn--circle hidden-md hidden-lg" data-rmd-action="block-open" data-rmd-target="#inquire">
            <i class="zmdi zmdi-phone"></i>
        </button>



    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
            <div class="ie-warning__inner">
                <ul class="ie-warning__download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
        <![endif]-->


    <!-- Javascript -->

    <!-- jQuery -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Waves button ripple effects -->
    <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>

    <!-- Select 2 - Custom Selects -->
    <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- NoUiSlider -->
    <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

    <!-- Light Gallery -->
    <script src="vendors/bower_components/lightgallery/dist/js/lightgallery-all.min.js"></script>

    <!-- rateYo - Ratings -->
    <script src="vendors/bower_components/rateYo/src/jquery.rateyo.js"></script>

    <!-- Autosize - Auto height textarea -->
    <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

    <!-- jsSocials - Social link sharing -->
    <script src="vendors/bower_components/jssocials/dist/jssocials.min.js"></script>

    <!-- Flot Charts -->
    <script src="vendors/bower_components/Flot/jquery.flot.js"></script>
    <script src="vendors/bower_components/Flot/jquery.flot.resize.js"></script>
    <script src="vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

    <!-- IE9 Placeholder -->
    <!--[if IE 9 ]>
        <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

    <!-- Site functions and actions -->
    <script src="js/app.min.js"></script>

    <!-- Demo only -->
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap&amp;key=AIzaSyD_nanUpVqytOmHHfuW4htZsiLH7YUzJ1A" async></script>
    <script src="js/demo/demo.js"></script>
    <script src="js/demo/maps/listing-detail-location-map.js"></script>
    <script src="js/demo/charts/line-chart.js"></script>
</body>

</html>