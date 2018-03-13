<?php 
	
	include "connection/connect.php";

	$id = $_GET['pay_del'];

	$qry = "DELETE FROM payment WHERE id = '".$id."' ";
	$run = mysqli_query($conn,$qry);
	if($qry == TRUE){
		header("location:manage_payment_form.php?msg=payment has been deleted");
	}else{
		header("location:manage_payment_form.php?msg=error");
	}

?>