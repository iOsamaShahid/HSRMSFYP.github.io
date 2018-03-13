<?php 
	
	include "connection/connect.php";

	if(isset($_POST['upadd_pay'])){

		$id = $_POST['hid'];

		 $up_username = $_POST['up_username'];
		 $up_totpay = $_POST['up_totpay'];
		 $up_installfirst = $_POST['up_installfirst'];
		 $up_installsecond = $_POST['up_installsecond'];
		 $up_installthird = $_POST['up_installthird'];
		 $up_installfourth = $_POST['up_installfourth'];


		if($up_username==""){
			header("location:edite_pay_form.php?msg=please Enter userame");
			exit();
		}
		if($up_totpay==""){
			header("location:edite_pay_form.php?msg=please Enter total Payment");
			exit();
		}
		if($up_installfirst==""){
			header("location:edite_pay_form.php?msg=please Enter Installment 1");
			exit();
		}
		if($up_installsecond==""){
			header("location:edite_pay_form.php?msg=please Enter Installment 2");
			exit();
		}
		if($up_installthird==""){
			header("location:edite_pay_form.php?msg=please Enter Installment 3");
			exit();
		}
		if($up_installfourth==""){
			header("location:edite_pay_form.php?msg=please Enter Installment 4");
			exit();
		}

		else{
		$qry = "UPDATE society SET username='".$up_username."',total_payments='".$up_totpay."',installment_1='".$up_installfirst."',installment_2='".$up_installsecond."',installment_3='".$up_installthird."',installment_4='".$up_installfourth."' WHERE id = '".$id."'";	
		$run = mysqli_query($conn,$qry);
			if($run == TRUE){
				header("location:manage_payment_form.php?msg=Payment has been updated");
			}
		}
	}

?>