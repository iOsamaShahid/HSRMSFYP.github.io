<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HSRMS</title>
		
       	<link rel="icon" href="img/HSRMS-logo.png" sizes="32x32">
        <!-- Material design colors -->
        <link href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS animations -->
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">

        <!-- Select2 - Custom Selects -->
        <link rel="stylesheet" href="vendors/bower_components/select2/dist/css/select2.min.css">

        <!-- Site -->
        <link rel="stylesheet" href="css/app_1.min.css">
        <link rel="stylesheet" href="css/app_2.min.css">

        <!-- Page Loader JS -->
        <script src="js/page-loader.min.js" async></script>
    <script src='../../../google_analytics_auto.js'></script></head>

    <body>
        <!-- Start page loader -->
        <div id="page-loader">
            <div class="page-loader__spinner"></div>
        </div>
        <!-- End page loader -->


        <!--<div class="action-header">
            <div class="container">
                <div class="action-header__item action-header__item--search">
                    <form>
                        <input type="text" placeholder="Location, neighborhood..."><!-- For desktop ->
                    </form>
                </div>

                <div class="action-header__item action-header__item--sort hidden-xs">
                    <span class="action-header__small">Sort by :</span>

                    <select class="select2">
                        <option>Recommended</option>
                        <option>Best Match</option>
                        <option>Most Homes</option>
                        <option>Most Favourited</option>
                    </select>
                </div>
            </div>
        </div>-->
        
        <?php include "header.php"; ?>

        <section class="section">
            <div class="container">
                <header class="section__title">
                    <h2>Our Services</h2>
                    <small>We provide our best services</small>
                </header>

                <div class="row neighb-guide">
                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/logo.png" alt="">
                            <div class="neighb-guide__label">Plumber</div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/Diy-Spade-icon.png" alt="">
                            <div class="neighb-guide__label">Gardener</div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/paint_roller-512.png" alt="">
                            <div class="neighb-guide__label"><span>Painter</span></div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/tools_DIY_crafting-14-512.png" alt="">
                            <div class="neighb-guide__label"><span>Carpenter</span></div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/Motor_mechanic_tools_wrench_vector.png" alt="">
                            <div class="neighb-guide__label"><span>Mechanic</span></div>
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="#" class="neighb-guide__item">
                            <img src="img/service/Power-Cable-icon.png" alt="">
                            <div class="neighb-guide__label"><span>Electrician</span></div>
                        </a>
                    </div>

                    
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
