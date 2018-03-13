<?php 
	include "connection/connect.php";

	$id = $_GET['dlt_h'];
	
	$qry = "DELETE FROM house WHERE house_id = '".$id."' ";
	$run = mysqli_query($conn,$qry);
	if($qry == TRUE){
		header("location:manage_house_form.php?msg=house  has been deleted");
	}else{
		header("location:manage_house_form.php?msg=error");
	}	
?>