<?php 
	
	include "connection/connect.php";

	$id = $_GET['user_del'];

	$qry = "DELETE FROM users WHERE id = '".$id."' ";
	$run = mysqli_query($conn,$qry);
	if($qry == TRUE){
		header("location:view_users.php?msg=category has been deleted");
	}else{
		header("location:view_users.php?msg=error");
	}

?>