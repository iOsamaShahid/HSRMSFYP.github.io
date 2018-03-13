<?php 
	session_start();

		if(isset($_SESSION['login'])){
			header("location:user_profile.php");
		}
?>
<?php 

	include "connect.php";
	
	if(isset($_POST['userrlogin'])){

		 $user_name = $_POST['username'];
	 	 $user_pass = $_POST['pass']; 

	 	if($user_name == "" && $user_pass == ""){
			header("location:user_login.php?msg=please fill the all fields");
		}else{
			$qry = "SELECT * FROM users WHERE name = '".$user_name."' AND password = '".$user_pass."' ";
			$run = mysqli_query($conn,$qry);
			if(mysqli_num_rows($run)>0){
				  $_SESSION['user_name'] = $user_name;
				  $_SESSION['login'] = True; 
				header("location:user_profile.php");
			}else{
				header("location:user_profile.php?msg=username and password not matched");
			}
		}
}


?>