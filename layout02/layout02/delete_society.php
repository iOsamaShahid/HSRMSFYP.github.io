<?php 
	
	include "connection/connect.php";

	$id = $_GET['dlt_sty'];

	$qry = "DELETE FROM society WHERE id = '".$id ."' ";
	$run = mysqli_query($conn,$qry);
	if($run == TRUE){
		header("location:manage_society_form.php?msg=category has been deleted");
	}else{
		header("location:manage_society_form.php?msg=error");
	}
?>