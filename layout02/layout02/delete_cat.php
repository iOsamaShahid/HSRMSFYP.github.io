<?php 
	
	include "connection/connect.php";

	$id = $_GET['cat_del'];

	$qry = "DELETE FROM cat WHERE cat_id = '".$id."' ";
	$run = mysqli_query($conn,$qry);
	if($qry == TRUE){
		header("location:manage_category_form.php?msg=category has been deleted");
	}else{
		header("location:manage_category_form.php?msg=error");
	}

?>