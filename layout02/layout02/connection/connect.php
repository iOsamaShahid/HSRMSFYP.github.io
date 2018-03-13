<?php 
	
	$host        = "localhost";
	$user        =  "root";
	$password    =  "";
	$db    		 = "housing_ms";	

	$conn = mysqli_connect($host,$user,$password,$db);
	if(mysqli_connect_errno()){

		die("database connection error. Error No:".
			 mysqli_connect_errno()." Details : ".mysqli_connect_error());
	}
?>
