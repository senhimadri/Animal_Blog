<?php
include_once('dbcon.php');
include_once('init.php');
if(!isset($_SESSION['loginCounter'])){
	$_SESSION['loginCounter'] = 0;
}

if(!isset($_SESSION['passCount'])){
	$_SESSION['passCount'] = 0;
}

$flag = true;

if(isset($_POST['l_email']) && $_POST['l_email']!=''){
	$email = $_POST['l_email'];
}
else{

	$flag = false;
}

if(isset($_POST['l_password']) && $_POST['l_password']!=''){
	$password = $_POST['l_password'];
}else{
	echo 'You must type your Password';
	$flag = false;
}

if($flag)
{
	$sql = "SELECT * FROM `ds_user` 
			WHERE `d_email`='$email'";
	$con= connect();
	$result = $con->query($sql);
	if($result->num_rows >0)
	{//if email exixt
		$sql = "SELECT * FROM `ds_user` 
			WHERE `d_email`='$email' 
			AND `d_password1`='$password'";
			
		$result = $con->query($sql);
		if($result->num_rows >0)
		{//email and password match
			foreach($result AS $row)
			{
			
		$_SESSION['userid'] = $row['d_userid'];
        $_SESSION['fname'] = $row['d_fname'];
        $_SESSION['email'] = $row['d_email'];
        $_SESSION['role'] = $row['role'];
			}

			$_SESSION['isLoggedIn'] = true;
			header("location:index.php");
		}else{//if password not match
			$_SESSION['isLoggedIn'] = false;
			
			$_SESSION['passCount'] +=1;
			header("location:login.php?msg=Your password is wrong");
		}
	}
	else{//if email not exist
		$_SESSION['isLoggedIn'] = false;
		
		$_SESSION['loginCounter'] +=1;
		//echo $_SESSION['loginCounter'];exit;
		if($_SESSION['loginCounter'] >= 3 )
		{
			setcookie("loginAttempt", true, time() + (60*5));
			
		}
		header("location:login.php?msg=Your email is wrong");
	}
	
	
}


?>