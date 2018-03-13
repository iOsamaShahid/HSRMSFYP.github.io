<?php 
	
	include "connection/connect.php";

	if(isset($_POST['add_house'])){

		$target = "../../front/front/uploads/";
		$user = $_POST['users'];			
		$categories = $_POST['categories'];
		$city = $_POST['city'];
		$societies = $_POST['societies'];
		$property = $_POST['property'];
		$desc = $_POST['descr'];
		$location = $_POST['location'];
		$price = $_POST['price'];
		$garages = $_POST['garages'];
		$floor = $_POST['floor']; 
		$bedroom = $_POST['bedroom'];
		$bathroom = $_POST['bathroom'];
		$land_area = $_POST['land_area'];
		$unit = $_POST['unit'];

		//$status = $_POST['hstatus'];
		// $image = $_FILES['image']['name'];
		// $image_tmp = $_FILES['image']['tmp_name'];
		// $path = "images/".$image;
		// move_uploaded_file($image_tmp,$path); 
		//die();
		$image1 = $target . basename($_FILES["image1"]["name"]);
		$image2 = $target . basename($_FILES["image2"]["name"]);
		$image3 = $target . basename($_FILES["image3"]["name"]);
		$file = $target . basename($_FILES["file"]["name"]);
		$image1name = basename($_FILES["image1"]["name"]);
		$image2name = basename($_FILES["image2"]["name"]);
		$image3name = basename($_FILES["image3"]["name"]);
		$filename	= basename($_FILES["file"]["name"]);
		$image1_tmp = $_FILES['image1']['tmp_name'];
		$image2_tmp = $_FILES['image2']['tmp_name'];
		$image3_tmp = $_FILES['image3']['tmp_name'];
		$file_tmp = $_FILES['file']['tmp_name'];
		if($categories == ""){
			header('location:add_house_form.php?msg=please select your category');
			exit();
		} 
		if($city  == ""){
			header('location:add_house_form.php?msg=please Enter city');
			exit();
		}
		if($societies == ""){
			header('location:add_house_form.php?msg=please select your society');
			exit();
		}

		if($property == ""){
			header('location:add_house_form.php?msg=please Enter property');
			exit();
		}

		if($desc == ""){
			header('location:add_house_form.php?msg=please Enter describtion');
			exit();
		}
		if($location == ""){
			header('location:add_house_form.php?msg=please Enter location');
			exit();
		}
		if($price == ""){
			header('location:add_house_form.php?msg=please Enter price ');
			exit();
		}
		if($garages == ""){
			header('location:add_house_form.php?msg=please Enter garages');
			exit();
		}
		if($floor == ""){
			header('location:add_house_form.php?msg=please Enter floor');
			exit();
		}
		if($bedroom == ""){
			header('location:add_house_form.php?msg=please Enter bedroom');
			exit();
		}
		if($bathroom == ""){
			header('location:add_house_form.php?msg=please Enter bathroom');
			exit();
		}
		if($land_area == ""){
			header('location:add_house_form.php?msg=please  Enter land Area');
			exit();
		}
		if($unit == ""){
			header('location:add_house_form.php?msg=please Enter unit');
			exit();
		}
		 // else{

			$qry = "INSERT INTO house(cate_id,city,soc_id,property_type,describtion,location,
				price,garages,flor,bedroom,bathroom,land_area,unit, userid)
			VALUES('".$categories."','".$city."','".$societies."','".$property."','".$desc."',
				'".$location."','".$price."','".$garages."','".$floor."','".$bedroom."',
				'".$bathroom."','".$land_area."','".$unit."',".$user.")";
				$image1move = move_uploaded_file($image1_tmp,$image1); 
				$image2move = move_uploaded_file($image2_tmp,$image2); 
				$image3move = move_uploaded_file($image3_tmp,$image3); 
				$filemove = move_uploaded_file($file_tmp,$file);

				if($image1move == FALSE){
						header("location:add_house_form.php?msg=Error in files");
						exit();
				}
				if($image2move == FALSE){
				header("location:add_house_form.php?msg=Error in files");
						exit();	
				}
				if($image3move == FALSE){
					header("location:add_house_form.php?msg=Error in files");
						exit();
				}
				if($filemove == FALSE){
					header("location:add_house_form.php?msg=Error in files");
						exit();
				}

				$query2 = "INSERT INTO USER_ATTACHMENT(UA_IMG1, UA_IMG2, UA_IMG3, UA_VIDEO, USERID)VALUES
						   ('$image1name','$image2name','$image3name','$filename', $user)"; 
			//echo $qry;
			//die;
			$run = mysqli_query($conn,$qry);
			if($run == TRUE){
				if(mysqli_query($conn, $query2)){
				header("location:manage_house_form.php?msg=create house");}
				else{
					header("location:manage_house_form.php?msg=errorimage");
				}
			}else{
				header("location:manage_house_form.php?msg=error");
			}
		// }
	}

?>