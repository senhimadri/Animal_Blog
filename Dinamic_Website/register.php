<?php 
include_once('dbcon.php');
$con=connect();

$r_fname=$_POST['first_name'];

$r_lname=$_POST['last_name'];

$r_email=$_POST['email'];

$r_address=$_POST['address'];

$r_animal=$_POST['animal'];

$r_password1=$_POST['password1'];

$r_password2=$_POST['password2'];

if(empty($r_fname) || empty($r_lname) || empty($r_email) || empty($r_email) || empty($r_address) || empty($r_animal) || empty($r_password1) || empty($r_password2) ) {

		if(empty($r_fname)) {
			$eee="Please enter your fname";
		}

		if(empty($r_lname)) {
			$eee="Please enter your lname";
		}

		if(empty($r_email)) {
			$eee="Please enter your ename";
		}

		if(empty($r_address)) {
			$eee="Please enter your aname";
		}

		if(empty($r_animal)) {
			$eee="Please enter your phone";
		}
		if(empty($r_password1)) {
			$eee="Please enter your pass1";
		}
		if(empty($r_password2)) {
			$eee="Please enter your pass2";
		}
		


		//link to the previous page
		
	}

	else{

		$sql= "INSERT INTO `ds_user`(`d_fname`,`d_lname`,`d_email`,`d_address`,`d_animal`,`d_password1`,`d_password2`) VALUES ('$r_fname','$r_lname','$r_email','$r_address','$r_animal','$r_password1','$r_password2')";

		if($con->query($sql)){
    	
		header("location:login.php");
			}
		else
		{
	

		header("location:registrationfrom.php");
    //echo 'Not inserted';
		}
	}


