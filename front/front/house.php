<?php
	session_start();
	include 'connectdb.php';

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

    
        <?php include "header.php"; ?>

        <section class="section">
            <div class="container">
                <header class="section__title">

                    <small>From our lifestyle section</small>
                </header>
                
<?php

if(isset($_GET['q'])){
$cat_id = $_GET['q'];
$select_query = "SELECT * from book_upload bu, img_upload iu where cat_id = '".$cat_id."' and bu.img_id = iu.img_id order by bu.book_id desc";

$sql = mysql_query($select_query) or die(mysql_error());	

while($row = mysql_fetch_array($sql,MYSQL_BOTH))
{	
?>

                <div class="row listings-grid">
                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="property_detail.php?q=<?php echo $row['book_id']; ?>">
                                <div class="listings-grid__main">
                                    <img src="<?php echo $row["img_path_1"]; ?>" alt="">
                                    <div class="listings-grid__price">RS<?php echo $row["price"]; ?></div>
                                </div>

                                <div class="listings-grid__body">
                                    <small><?php echo $row["title"]; ?></small>
                                    <h5><?php echo $row["author"]; ?></h5>
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
                    </div>
          <?php
}

}
else
{ 
$select_query = "SELECT * from book_upload bu, img_upload iu where bu.img_id = iu.img_id order by bu.book_id desc";

$sql = mysql_query($select_query) or die(mysql_error());	

while($row = mysql_fetch_array($sql,MYSQL_BOTH))
{	
?>	
                    <div class="col-sm-6 col-md-3">
                        <div class="listings-grid__item">
                            <a href="property_detail.php?q=<?php echo $row['book_id']; ?>">
                                <div class="listings-grid__main">
                                    <img src="<?php echo $row["img_path_1"]; ?>" alt="">
                                    <div class="listings-grid__price">RS<?php echo $row["price"]; ?></div>
                                </div>

                                <div class="listings-grid__body">
                                    <small><?php echo $row["title"]; ?></small>
                                    <h5><?php echo $row["author"]; ?></h5>
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
                    </div>
                    
<?php
}

}
?>
 
                    
                </div>

                <div class="load-more">
                    <a href="#"><i class="zmdi zmdi-refresh-alt"></i> Load more listings</a>
                </div>
            </div>
        </section>
        
        <?php include "footer.php"; ?>

       
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
