<!doctype html>
<html>
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
	
   
   	 <?php include "header.php"; ?>
    
      <section class="section">
        <div class="container">
            

            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                       
                       

                        <div class="detail-info">
                            <?php 
                        include "connect.php";
                        $qry = "SELECT house.house_id,payment.total_payments,payment.installment_1,payment.installment_2,payment.installment_3,payment.installment_4, cat.cat_name, society.sty_name, house.city, house.property_type, house.describtion, house.location, house.price,house.land_area,house.unit FROM house, cat, society, payment where house.cate_id = cat.cat_id and house.soc_id = society.id and payment.userid = ".$_SESSION['id']." and house.userid = ".$_SESSION['id'];
                         $run = mysqli_query($conn,$qry);
                         $sno = 0;
                         if($row = mysqli_fetch_assoc($run)){?>   
                        

                            <ul class="detail-info__list clearfix">
                                <li>
                                    <span>Category:</span>
                                    <span><?php echo $row['cat_name'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>City:</span>
                                    <span><?php echo $row['city']?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Location:</span>
                                    <span><?php echo $row['location'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Property Type:</span>
                                    <span><?php echo $row['property_type']?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Message:</span>
                                    <span><?php echo $row['describtion'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Society:</span>
                                    <span><?php echo $row['sty_name']?> </span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Price:</span>
                                    <span><?php echo $row['price'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Land Area:</span>
                                    <span><?php echo $row['land_area'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Unit:</span>
                                    <span><?php echo $row['unit'];?></span>
                                </li>
                                </ul>
                                 
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Total Payment:</span>
                                    <span><?php echo $row['total_payments'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Installment 1:</span>
                                    <span><?php echo $row['installment_1'];?></span>
                                </li>
                                </ul>
                                 <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Installment 2:</span>
                                    <span><?php echo $row['installment_2'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Installment 3:</span>
                                    <span><?php echo $row['installment_3'];?></span>
                                </li>
                                </ul>
                                <ul class="detail-info__list clearfix">

                                <li>
                                    <span>Installment 4:</span>
                                    <span><?php echo $row['installment_4'];?></span>
                                </li>
                                </ul>
                                <?php } ?>
                        </div>
                    </div>

                 
                </div>

                <div  class="col-md-5 ">
                    <form class="card">
                        <div class="card__header">
                            
                            
                            
                            <?php
                            $imgqry = "select * from user_attachment where userid=".$_SESSION['id'].";";
                            $imgrun = mysqli_query($conn, $imgqry);

                            ?>
                          <div class="detail-media">
                            <div class="tab-content">
                                <div class="tab-pane fade in active light-gallery" id="detail-media-images">
                                    <?php if($imgrow = mysqli_fetch_assoc($imgrun)){ ?> 
                                    <a href="uploads/<?php echo $imgrow['ua_img1']; ?>">
                                        <img src="uploads/<?php echo $imgrow['ua_img1']; ?>" alt="">
                                    </a>
                                    <a href="uploads/<?php echo $imgrow['ua_img2']; ?>">
                                        <img src="uploads/<?php echo $imgrow['ua_img2']; ?>" alt="">
                                    </a>
                                    <a href="uploads/<?php echo $imgrow['ua_img2']; ?>">
                                        <img src="uploads/<?php echo $imgrow['ua_img2']; ?>" alt="">
                                    </a><?php } ?>
                                </div>
                                <div class="tab-pane fade light-gallery" id="detail-media-floorplan">
                                    <a href="img/author15.png">
                                        <img src="img/author15.png" alt="">
                                    </a>
                                </div>
                                <div class="tab-pane fade" id="detail-media-map">
                                    <div id="listing-map"></div>
                                </div>
                            </div>

                            
                        </div>  
                           
                            
                            
                            
                            
                            
                            
                        </div>

                       

                        <div class="card__footer">
                     <center>   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Watch video
  </button></center>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
       
        
        <!-- Modal body -->
        <div class="modal-body">
          <video width="100%" height="380" controls>
  <source src='uploads/<?php echo $imgrow['ua_video']; ?>' type="video/mp4"> 
  <?php
/*$user = "root"; 
$password = ""; 
$host = "locahost"; 
$dbase = "housing_management_system"; 
$table = "Videos"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT description, filename, fileextension FROM $table ORDER BY ID DESC LIMIT 5" ) 
or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
while ($row = mysql_fetch_array($result)){ 
$videos_field= $row['filename'];
$video_show= "uploads/videos/$videos_field";
$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; */

?>

</video>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

                        </div>
                    </form>

                    
                    
                </div>
            </div>
        </div>
    </section>

 
    
 
    <?php include "footer.php"; ?>
    
    
    
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

    
</body>
</html>
