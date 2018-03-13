<?php 
	
	include "connection/connect.php";

	if(isset($_POST['upadd_sty'])){

		$id = $_POST['hid'];

		 $up_sty_name = $_POST['upsociety_name'];
		 $up_sty_area = $_POST['uparea_name'];
		 $up_sty_city = $_POST['upcity'];


		if($up_sty_name==""){
			header("location:edite_society_form.php?msg=please Enter Name");
			exit();
		}
		if($up_sty_area==""){
			header("location:edite_society_form.php?msg=please Enter area");
			exit();
		}

		if($up_sty_city==""){
			header("location:edite_society_form.php?msg=please Enter city");
			exit();
		}else{
		$qry = "UPDATE society SET sty_name='".$up_sty_name."',sty_area='".$up_sty_area."',sty_city='".$up_sty_city."' WHERE id = '".$id."'";	
		$run = mysqli_query($conn,$qry);
			if($run == TRUE){
				header("location:manage_society_form.php?msg=category has been updated");
			}
		}
	}

?>