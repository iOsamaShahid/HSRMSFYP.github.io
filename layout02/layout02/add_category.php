<?php 
	
	include "connection/connect.php";

	if(isset($_POST['add_cat'])){

		
		 $cat_id     = $_POST['categ_id'];
		 $cat_name   = $_POST['categ_name'];
		
		if($cat_id == ""){
			header("location:add_cat_form.php?msg=Enter category id");
			exit();
		}

		if($cat_name == ""){
			header("location:add_cat_form.php?msg=Enter category Name");
			exit();
		}else{

			$qry = "INSERT INTO cat(cat_id,cat_name)VALUES('".$cat_id."','".$cat_name."')";
			
			$run = mysqli_query($conn,$qry);

			if($run == true){
				
				header("location:manage_category_form.php?msg=Category Have been created");
			}else{
				header("location:manage_category_form.php?msg=category does not create");
			}
	}

}	
?>