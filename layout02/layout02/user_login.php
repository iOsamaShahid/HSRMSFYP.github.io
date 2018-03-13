<?php 
  session_start();

    if(isset($_SESSION['login'])){
      header("location:dashboard.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Login HMS | Housing Record Management System</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->


  <!-- CORE CSS-->
  
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom-style.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">

  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="css/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>
<style>
.btn, .btn-large {
    text-decoration: none;
    color: #FFF;
    background-color: rgba(40, 109, 105, 0.86);
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: 0.2s ease-out;
    -moz-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    transition: 0.2s ease-out;
    cursor: pointer;
}

.btn:hover, .btn-large:hover {
    background-color: rgb(40, 109, 105);
}

</style>
<body class="cyan">
  <!-- Start Page Loading -->
  
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="process.php" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/HSRMS-logo.png" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Housing Management System </p>
          </div>
        </div>
        <div class="row margin" >
          <div class="input-field col s12" >
            <i  class="mdi-social-person-outline prefix" ></i>
            <input id="username" type="text" name="username">
            <label class="blue-grey-text" for="username" class="center-align">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input class="gray" id="password" type="password" name="pass">
            <label class="blue-grey-text" for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label class="blue-grey-text" for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" name="userlogin">Login</button>
          </div>
          <p class="caption" style="color: red;"><?php if(isset($_GET['msg'])){echo $_GET['msg']; }?> </p>
        </div>
      </form>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="js/plugins.js"></script>

</body>

</html>