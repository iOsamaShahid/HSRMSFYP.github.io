<?php
session_start();

	include 'connect.php'; 
	
	$dset1=mysql_query("select ifnull(max(book_id),0) + 1 from book_upload");
	
	while($row = mysql_fetch_array($dset1))
	{
		$book_id = $row[0];
	}

	$dset2=mysql_query("select ifnull(max(img_id),0) + 1 from img_upload");
	
	while($row = mysql_fetch_array($dset2))
	{
		$img_id = $row[0];
	}

	$dset3=mysql_query("select ifnull(max(ad_id),0) + 1 from ads_master");
	
	while($row = mysql_fetch_array($dset3))
	{
		$ad_id = $row[0];
	}

	$ad_title = $_POST['ad_title'];
	$isbn = $_POST['isbn'];
	$book_title = $_POST['title'];
	$author = $_POST['author'];
	$lang = $_POST['lang'];
	$date = $_POST['rel_date'];
	$pages = $_POST['page'];
	$type = $_POST['type'];
	$cat = $_POST['txtcat'];
	$cond = $_POST['cond'];
	$subtitle = $_POST['subtitle'];
	$price = $_POST['price'];
	$publisher = $_POST['publisher'];
	$descp = $_POST['descp'];
	
		$ad_title 	= mysql_real_escape_string(trim($ad_title));
		$book_title 	= mysql_real_escape_string(trim($book_title));
		$author 	= mysql_real_escape_string(trim($author));
		$cond 		= mysql_real_escape_string(trim($cond));
		$subtitle 	= mysql_real_escape_string(trim($subtitle));
		$publisher 	= mysql_real_escape_string(trim($publisher));
		$descp 		= mysql_real_escape_string(trim($descp));

if (!empty($_FILES["uploadedimage1"]["name"]) || !empty($_FILES["uploadedimage2"]["name"]) || !empty($_FILES["uploadedimage3"]["name"])) 
{

	$file_name1=basename($_FILES["uploadedimage1"]["name"]);
	$file_name2=basename($_FILES["uploadedimage2"]["name"]);
	$file_name3=basename($_FILES["uploadedimage3"]["name"]);

	$temp_name1=$_FILES["uploadedimage1"]["tmp_name"];
	$temp_name2=$_FILES["uploadedimage2"]["tmp_name"];
	$temp_name3=$_FILES["uploadedimage3"]["tmp_name"];

	$target_path1 = "uploads/".$file_name1;	
	$target_path2 = "uploads/".$file_name2;	
	$target_path3 = "uploads/".$file_name3;	
	
	$ext1 = pathinfo($target_path1,PATHINFO_EXTENSION);
	$ext2 = pathinfo($target_path2,PATHINFO_EXTENSION);
	$ext3 = pathinfo($target_path3,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])) 
{
	if (!empty($_FILES["uploadedimage1"]["name"]))
	{
	    $check1 = getimagesize($_FILES["uploadedimage1"]["tmp_name"]);
	}
	if (!empty($_FILES["uploadedimage2"]["name"]))
	{
	    $check2 = getimagesize($_FILES["uploadedimage2"]["tmp_name"]);
	}
	if (!empty($_FILES["uploadedimage3"]["name"]))
	{
	    $check3 = getimagesize($_FILES["uploadedimage3"]["tmp_name"]);
	}
 
    if($check1 !== false || $check2 !== false || $check3 !== false) 
    {
        $uploadOk = 1;
    } 
    else 
    {
	echo "File is not an image.";

        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["uploadedimage1"]["size"] > 500000 || $_FILES["uploadedimage2"]["size"] > 500000 || $_FILES["uploadedimage3"]["size"] > 500000) 
{
	echo "Sorry, Image is too large.";

	$uploadOk = 0;
}

// Allow certain file formats
if($ext1 != "jpg" && $ext1 != "png" && $ext1 != "jpeg" && $ext1 != "gif"
&& $ext2 != "jpg" && $ext2 != "png" && $ext2 != "jpeg" && $ext2 != "gif"
&& $ext3 != "jpg" && $ext3 != "png" && $ext3 != "jpeg" && $ext3 != "gif") 
{
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

	$uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0)
{
	echo "Sorry, your file was not uploaded.";

	// if everything is ok, try to upload file
} 

/*
if(move_uploaded_file($temp_name1, $target_path1) && move_uploaded_file($temp_name2, $target_path2) && move_uploaded_file($temp_name3, $target_path3)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into mem_ads (ad_title,book_id,uid,sysdate) 
	VALUES ('".$ad_title."','".$book_id."','".$_SESSION['uname']."',CURDATE())";

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,img_path_2,img_path_3,uid,sysdate) 
	VALUES ('".$target_path1."','".$target_path2."','".$target_path3."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";
}
else
{
      	print '<script type = "text/javascript">';
	print 'alert("Error While uploading Ad on the server.")';
	print '</script>';
} 
*/
}


if (!empty($_FILES["uploadedimage1"]["name"]) && !empty($_FILES["uploadedimage2"]["name"]) && !empty($_FILES["uploadedimage3"]["name"])) 
{
if(move_uploaded_file($temp_name1, $target_path1) && move_uploaded_file($temp_name2, $target_path2) && move_uploaded_file($temp_name3, $target_path3)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,img_path_2,img_path_3,uid,sysdate) 
	VALUES ('".$target_path1."','".$target_path2."','".$target_path3."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage1"]["name"]) && !empty($_FILES["uploadedimage2"]["name"])) 
{
if(move_uploaded_file($temp_name1, $target_path1) && move_uploaded_file($temp_name2, $target_path2)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,img_path_2,uid,sysdate) 
	VALUES ('".$target_path1."','".$target_path2."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage1"]["name"]) && !empty($_FILES["uploadedimage3"]["name"])) 
{
if(move_uploaded_file($temp_name1, $target_path1) && move_uploaded_file($temp_name3, $target_path3)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,img_path_2,uid,sysdate) 
	VALUES ('".$target_path1."','".$target_path3."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage2"]["name"]) && !empty($_FILES["uploadedimage3"]["name"])) 
{
if(move_uploaded_file($temp_name2, $target_path2) && move_uploaded_file($temp_name3, $target_path3)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,img_path_2,uid,sysdate) 
	VALUES ('".$target_path2."','".$target_path3."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage1"]["name"])) 
{
if(move_uploaded_file($temp_name1, $target_path1)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,uid,sysdate) 
	VALUES ('".$target_path1."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage2"]["name"])) 
{
if(move_uploaded_file($temp_name2, $target_path2)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,uid,sysdate) 
	VALUES ('".$target_path2."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else if (!empty($_FILES["uploadedimage3"]["name"])) 
{
if(move_uploaded_file($temp_name3, $target_path3)) 
{
 	$query1 = "INSERT into book_upload (book_id,isbn,title,subtitle,author,lang,rel_date,pages,book_cond,type,cat_id,descp,price,publisher,img_id,uid,sysdate) 
	VALUES ('".$book_id."','".$isbn."','".$book_title."','".$subtitle."','".$author."','".$lang."','".$date."','".$pages."','".$cond."','".$type."','".$cat."','".$descp."','".$price."','".$publisher."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query1) or die(mysql_error());

 	$query2 = "INSERT into ads_master (ad_id,ad_title,book_id,img_id,uid,sysdate) 
	VALUES ('".$ad_id."','".$ad_title."','".$book_id."','$img_id','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query2) or die(mysql_error());

 	$query_upload="INSERT into img_upload (img_path_1,uid,sysdate) 
	VALUES ('".$target_path3."','".$_SESSION['uname']."',CURDATE())";

	mysql_query($query_upload) or die(mysql_error());

	echo "Your Ad uploaded successfully.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_area.php'>";	
}
else
{
	echo "Error While uploading Book on the server.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";	
}
}
else
{
	echo "At least one image is required for Ad upload.";

	echo "<meta http-equiv = 'refresh' content = '5; url = mem_ads.php'>";
}
	mysql_close($connectdb);
?> 
