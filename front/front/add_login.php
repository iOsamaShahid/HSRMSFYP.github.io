<?php 
	
	include "connect.php";

	if(isset($_POST['add_login'])){

		
		 $u_id     = $_POST['u_id'];
		 $u_name   = $_POST['u_name'];
		 $u_email    = $_POST['u_email'];
		 $u_password  = $_POST['u_password'];
		 $u_contact    = $_POST['u_contact'];
		 $u_address   = $_POST['u_address'];
		
		if($u_id == ""){
			header("location:index.php?msg=Enter  id");
			exit();
		}
		if($u_name == ""){
			header("location:index.php?msg=Enter Name");
			exit();
		}

		if($u_email == ""){
			header("location:index.php?msg=Enter Email");
			exit();
		}

		if($u_password == ""){
			header("location:index.php?msg=Enter Password");
			exit();
		}

		if($u_contact == ""){
			header("location:index.php?msg=Enter Contact");
			exit();
		}


		if($u_address == ""){
			header("location:index.php?msg=Enter Address");
			exit();
		}else{

			$qry = "INSERT INTO users(id,name,email,password,contact,address)VALUES('".$u_id."','".$u_name."','".$u_email."','".$u_password."','".$u_contact."','".$u_address."')";
			
			$run = mysqli_query($conn,$qry);

			if($run == true){
				
				header("location:index.php?msg=SuccessFully Register");
			}else{
				header("location:manage_category_form.php?msg=category does not create");
			}
	}

}	
?>