<?php 
	session_start();

		if(isset($_SESSION['login'])){
			header("location:dashboard.php");
		}
?>
<?php 

	include "connection/connect.php";
	
	if(isset($_POST['userlogin'])){

		 $user_name = $_POST['username'];
	 	 $user_pass = $_POST['pass']; 

	 	if($user_name == "" && $user_pass == ""){
			header("location:user_login.php?msg=please fill the all fields");
		}else{
			$qry = "SELECT * FROM admin_login WHERE user_name = '".$user_name."' AND user_pass = '".$user_pass."' ";
			$run = mysqli_query($conn,$qry);
			if(mysqli_num_rows($run)>0){
				  $_SESSION['user_name'] = $user_name;
				  $_SESSION['login'] = True; 
				header("location:dashboard.php");
			}else{
				header("location:user_login.php?msg=Invalid Username/Password");
			}
		}
}


?>