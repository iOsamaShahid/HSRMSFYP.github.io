<?php 
	
	include "connection/connect.php";

	if(isset($_POST['update_cat'])){

		$id = $_POST['hid'];

		$upcateg = $_POST['upcat_name'];

		if($upcateg == ""){
			header("location:edite_cat_form.php?msg=please Enter cat");
		}else{
			$qry = "UPDATE cat SET cat_name = '".$upcateg."' WHERE cat_id = '".$id."' ";
			$run = mysqli_query($conn,$qry);
			if($run == TRUE){
				header("location:manage_category_form.php?msg=category has been updated");
			}
		}
	}

?>