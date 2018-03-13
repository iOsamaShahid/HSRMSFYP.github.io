<?php 
	
	include "connection/connect.php";

	if(isset($_POST['add_sty'])){

		$society_name = $_POST['society_name'];
		$society_area = $_POST['area_name'];
		$society_city = $_POST['city'];

		if($society_name==""){
			header('location:Add_society_form.php?msg=please Enter society');
			exit();
		}if($society_area == ""){
			header('location:Add_society_form.php?msg=please Enter Area');
			exit();
		}if($society_city == ""){
			header('location:Add_society_form.php?msg=please Enter city');
			exit();
		}else{
			$qry = "INSERT INTO society(sty_name,sty_area,sty_city)VALUES('".$society_name."','".$society_area."','".$society_city."')";
			//echo $qry;
			//die;
			$run = mysqli_query($conn,$qry);
			if($run == TRUE){
				header('location:manage_society_form.php?msg=society has been inserted');
			}else{
				header('location:manage_society_form.php.php?msg=error');
			}
		}
	}

?>