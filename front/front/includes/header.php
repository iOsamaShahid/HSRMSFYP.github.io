<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html lang="en" class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Housing Management System</title>

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
                    <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#">Register</a>

                        <form class="dropdown-menu stop-propagate" action="index.php" method="post" name="signup" method="post" enctype="multipart/form-data">
                           
                    <?php

if(isset( $_POST['fname']))
{
	include 'connect.php'; 

	$result = mysql_query ("SELECT email FROM signup WHERE email = '".$_POST['email']."'");
	
	if(mysql_num_rows($result) > 0)
	{
		echo "Email address already exist.";
	}
	else
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$city = $_POST['city'];
		$add1 = $_POST['add1'];
		$email = $_POST['email'];
		$ph = $_POST['ph'];
		$pwd = $_POST['pwd'];

		if(isset($_POST["submit"])) 
		{
			$user = mysql_query("select ifnull(max(uid),0) from signup");

			for ($j=0; $j<mysql_num_rows($user); $j++)
			{
				$res = mysql_fetch_array($user);
			}

			if($res[0] > 0)
			{
				$uid = $res[0] + 1;
			}
			else
			{
				$uid = 1001;
			}

			if (!empty($_FILES["uploadedimage1"]["name"]))
			{
				$file_name1=basename($_FILES["uploadedimage1"]["name"]);
				$temp_name1=$_FILES["uploadedimage1"]["tmp_name"];
				$target_path1 = "uploads/".$file_name1;
				$ext1 = pathinfo($target_path1,PATHINFO_EXTENSION);

				// Check if image file is a actual image or fake image


				$check1 = getimagesize($_FILES["uploadedimage1"]["tmp_name"]);

				if($check1 !== false)
    				{
				        echo "File is an image - " . $check1["mime"] . ".";
					echo "<br>";
				        $uploadOk = 1;
				} 
				else 
    				{
        				echo "File is not an image.";
        				$uploadOk = 0;
			    	}

				// Check file size
				if ($_FILES["uploadedimage1"]["size"] > 500000)
				{
    					echo "Sorry, your file is too large.";
    					$uploadOk = 0;
				}

				// Allow certain file formats
				if($ext1 != "jpg" && $ext1 != "png" && $ext1 != "jpeg" && $ext1 != "gif")
				{
    					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    					$uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) 
				{
					echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
				} 

				if($fname != "" && $email != "" && $pwd != "" && $ph != "")
				{
					move_uploaded_file($temp_name1, $target_path1);

				 	$query="INSERT into signup (uid,fname,lname,city,add1,email,img_path,pwd,ph,st_id,sysdate) 
					VALUES ('".$uid."','".$fname."','".$lname."','".$city."','".$add1."','".$email."','".$target_path1."','".$pwd."','".$ph."',1,CURDATE())";

					mysql_query($query) or die(mysql_error());
		
				      	echo "Welcome to DoorStepBiblio. An activation link has been sent to your email address. To activate your account, please click the link mentioned in the email.";

					echo "</br>";
					echo "</br>";

// Email sending for activation link (User signup with image)

//require_once('class.phpmailer.php');

//$mail = new PHPMailer;
//$mail->IsSMTP();
//$mail->CharSet="UTF-8";
//$mail->Host = 'mail.affinitylibrary.org';
//$mail->Port = 26;
//$mail->Username = 'info@affinitylibrary.org';
//$mail->Password = 'b4dSegV866';
//$mail->SMTPAuth = true;

//$mail->From = 'info@affinitylibrary.org';
//$mail->FromName = 'DoorStepBiblio.com';
//$mail->AddAddress($email);

//$mail->IsHTML(true);
//$mail->Subject    = "Account Activation";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
//$mail->Body    = nl2br("Thank you for registering doorstepbiblio.com. To activate your account, please click the below mentioned link. \n
//			Link: www.doorstepbiblio.com/validation.php?q=$uid"); 

//	if(!$mail->Send()) 
//	{
//		echo "Mailer Error: " . $mail->ErrorInfo;
//	}
				}
				else
				{
					echo "Required fields cannot be left blank.";
					echo "</br>";
					echo "</br>";
				}

			}
			else if($fname != "" && $email != "" && $pwd != "" && $ph != "")
			{
			 	$query="INSERT into signup (uid,fname,lname,city,add1,email,pwd,ph,st_id,sysdate) 
				VALUES ('".$uid."','".$fname."','".$lname."','".$city."','".$add1."','".$email."','".$pwd."','".$ph."',1,CURDATE())";

				mysql_query($query) or die(mysql_error());

				echo "Welcome to DoorStepBiblio. An activation link has been sent to your email address. To activate your account, please click the link mentioned in the email.";	

				echo "</br>";
				echo "</br>";

// Email sending for activation link (User signup without image)

//require_once('class.phpmailer.php');

//$mail = new PHPMailer;
//$mail->IsSMTP();
//$mail->CharSet="UTF-8";
//$mail->Host = 'mail.affinitylibrary.org';
//$mail->Port = 26;
//$mail->Username = 'info@affinitylibrary.org';
//$mail->Password = 'b4dSegV866';
//$mail->SMTPAuth = true;

//$mail->From = 'info@affinitylibrary.org';
//$mail->FromName = 'DoorStepBiblio.com';
//$mail->AddAddress($email);

//$mail->IsHTML(true);
//$mail->Subject    = "Account Activation";
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
//$mail->Body    = nl2br("Thank you for registering doorstepbiblio.com. To activate your account, please click the below mentioned link. \n
//			Link: www.doorstepbiblio.com/validation.php?q=$uid"); 

	//if(!$mail->Send()) 
	//{
	//	echo "Mailer Error: " . $mail->ErrorInfo;
	//}
			$to = trim($email);
$subject = "Account Activation";
$txt = "Thank you for registering doorstepbiblio.com. To activate your account, please click the below mentioned link. \n
		Link: www.doorstep.nextech.com.pk/validation.php?q=$uid";
$headers = "From:info@doorstep.nextech.com.pk" . "\r\n" .
"CC: somebodyelse@example.com";

$res = mail('edyadeel@gmail.com',$subject,$txt,$headers);

print_r($res);

	if(!$res) 
	{
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
			}
			else
			{
				echo "Required fields cannot be left blank.";
				echo "</br>";
				echo "</br>";
			}

		}
	}


}
?>
                           
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="fname">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name" name="lname">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address" name = "add1">
                                <i class="form-group__bar"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address" name="email">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="pwd">
                                <i class="form-group__bar"></i>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contact" name="ph">
                                <i class="form-group__bar"></i>
                            </div>
                            
                            <div class="form-group">
                                <input type="file" class="form-control" placeholder="Contact" name="uploadedimage1" id="uploadedimage1">
                                <i class="form-group__bar"></i>
                            </div>

                            <p><small>By Signing up with HMS, you're agreeing to our <a href="#">terms and conditions</a>.</small></p>

                            <button class="btn btn-primary btn-block m-t-10 m-b-10" name="submit">Register</button>

                            <div class="text-center"><small><a href="#">Are you an Agent?</a></small></div>

                        </form>
                    </li>

                    <li class="dropdown top-nav__guest">
                        <a data-toggle="dropdown" href="#" data-rmd-action="switch-login">Login</a>

                        <div class="dropdown-menu">
                            <div class="tab-content">
                                <form class="tab-pane active in fade" id="top-nav-login" action="index.php" method="post"  name="home">
                          <?php
	include 'connect.php';

if(isset( $_POST['email']))
{
	$user = mysql_query("select uid, st_id from signup where email = '".$_POST['email']."'");

	if(mysql_num_rows($user) > 0)
	{
		$res = mysql_fetch_array($user);

		if($res[1] == 2)
		{
			$result = mysql_query ("SELECT pwd, uid FROM signup WHERE email = '".$_POST['email']."'");
	
			if(mysql_num_rows($result) > 0)
			{
				$pwd = mysql_fetch_array($result);
	
				if($pwd[0] == $_POST['pwd'])
				{
					$_SESSION['uname'] = $pwd[1];
	
					echo "<meta http-equiv = 'refresh' content = '0; url = member_area.php'>";			
				}
				else
				{
					echo "<p>Invalid Password. Please enter the correct password.</p>";
				}
			}
			else
			{
				echo "<p>Invalid email address.</p>";
			}
		}
		else
		{ 
			echo "<p>This account has not been activated. Please check your email for account activation.</p>"; 
		}
	}
	else
	{ echo "<p>Please Enter Email/Password.</p>"; }
}
?>         
                                   
                                    <div class="form-group">
                                        <input type="text" name="email" id="username" class="form-control" placeholder="Email Address">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="pwd" id="password" class="form-control" placeholder="Password">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <button class="btn btn-primary btn-block m-t-10 m-b-10" name="btnsubmit">Login</button>

                                    <div class="text-center">
                                        <a href="#top-nav-forgot-password" data-toggle="tab"><small>Forgot email/password?</small></a>
                                    </div>
                                </form>

                                <form class="tab-pane fade forgot-password" id="top-nav-forgot-password">
                                    <a href="#top-nav-login" class="top-nav__back" data-toggle="tab"></a>

                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Emaill Address">
                                        <i class="form-group__bar"></i>
                                    </div>

                                    <button class="btn btn-warning btn-block">Reset Password</button>
                                </form>
                            </div>
                        </div>
                    </li>

                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    </li>
                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                    </li>
                    <li class="pull-right top-nav__icon">
                        <a href="#"><i class="zmdi zmdi-google"></i></a>
                    </li>

                    <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-email"></i>hello@hms.com</span></li>
                    <li class="pull-right hidden-xs"><span><i class="zmdi zmdi-phone"></i>001-541-754-3010</span></li>
                </ul>
            </div>
        </div>

        <div class="header__main">
            <div class="container">
                <a class="logo" href="index.html">
                    <img src="img/logo.png" alt="">
                    <div class="logo__text">
                        <span>HMS</span>
                        <span> Real Estate</span>
                    </div>
                </a>

                <div class="navigation-trigger visible-xs visible-sm" data-rmd-action="block-open" data-rmd-target=".navigation">
                    <i class="zmdi zmdi-menu"></i>
                </div>
                <?php 
                    $path =$_SERVER['PHP_SELF'];
                    $path = explode("/",$path);
                    $path = end($path);
                ?>
                <ul class="navigation">
                    <li class="visible-xs visible-sm"><a class="navigation__close" data-rmd-action="navigation-close" href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>

                    <li class="active navigation_dropdown">
                        <a href="index.php" 
                        class="<?php 
                        echo $path =='index.php'?'current':'';?>"><i class="zmdi zmdi-home"></i></a>

                        
                    </li> 

                        <li class="navigation_dropdown">
                            <a href="plots.php" class="">House</a>

                           
                        </li>


                        <li><a href="plots.php">Plots</a></li>
                        
						<li><a href="service.html">Services</a></li>
                        
                        <li><a href="team.html">About Us</a></li>

                        <li><a href="contact.html">Contact</a></li>

                        

                        
                </ul>
            </div>
       </div>  
    </header>    