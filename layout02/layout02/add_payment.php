<?php 

	session_start();
	
	include "connection/connect.php";

	if(isset($_POST['add_pay'])){
		$user = $_POST['users'];	
		$user_name = $_POST['user_name'];
		$tot_pay = $_POST['tot_pay'];
		$first_install = $_POST['first_install'];
		$second_install = $_POST['second_install'];
		$third_install = $_POST['third_install'];
		$fourth_install = $_POST['fourth_install'];

		if($user_name==""){
			header('location:add_pay_form.php?msg=please Enter society');
			exit();
		}if($tot_pay == ""){
			header('location:Add_pay_form.php?msg=please Enter Area');
			exit();
		}
		if($first_install  == ""){
			header('location:Add_pay_form.php?msg=please Enter city');
			exit();
		}
		if($second_install == ""){
			header('location:Add_pay_form.php?msg=please Enter city');
			exit();
		}
		if($third_install == ""){
			header('location:Add_pay_form.php?msg=please Enter city');
			exit();
		}
		if($fourth_install == ""){
			header('location:Add_pay_form.php?msg=please Enter city');
			exit();
		}else{
			$qry = "INSERT INTO payment(username,total_payments,installment_1,installment_2,installment_3,installment_4, userid)VALUES('".$user_name."',".$tot_pay.",".$first_install.",".$second_install.",".$third_install.",".$fourth_install.", ".$user.")";
			//echo $qry;
			//die;
			$run = mysqli_query($conn,$qry);
			if($run){
				header('location:manage_payment_form.php?msg=Payment has been inserted');
			}else{
				header('location:manage_payment_form.php?msg=error');
			}
		}
	}

?>