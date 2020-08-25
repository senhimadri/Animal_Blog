<?php
//Connect to database server
include_once('dbcon.php');
$con = connect(true);
//Create Database
$sql = "CREATE DATABASE DW_00165658";
if($con->query($sql)){
	echo 'Database Created Successfully<br>';
}

//Connect to database
$con = connect();
if($con->connect_error){
    die("connection failed:" .$con->connect_error);
}

//Create Users Table
$sql = "CREATE TABLE `ds_user` (
  `d_userid` int(10) AUTO_INCREMENT PRIMARY KEY,
  `d_fname` varchar(60) NOT NULL,
  `d_lname` varchar(60) NOT NULL,
  `d_email` varchar(100) NOT NULL,
  `d_address` text NOT NULL,
  `d_animal` varchar(50) NOT NULL,
  `d_password1` varchar(50) NOT NULL,
  `d_password2` varchar(50) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '0' COMMENT '0-customer, 1-admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";
if($con->query($sql)){
	echo 'Users table created Successfully<br>';
}
//inserting data

$sql = "INSERT INTO `ds_user` (`d_fname`, `d_lname`, `d_email`, `d_address`, `d_animal`, `d_password1`, `d_password2`, `role`) VALUES
('Admin', 'Himadri', 'sen@gmail', 'Joypara', '00165658', '1234', '1234', 1);";
if($con->query($sql)){
  echo 'Admin user created Successfully<br>
  Email: sen@gmail<br>Password:1234';

}

//Create Forum Table
$sql = 'CREATE TABLE `forum` (
  `pid` int(10) AUTO_INCREMENT PRIMARY KEY,
  `ptitle` text NOT NULL,
  `ppost` text NOT NULL,
  `pdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
';
if($con->query($sql)){
	echo 'Forum table created Successfully<br>';
}

//Create Comment Table
$sql = 'CREATE TABLE `coments` (
  `cid` int(10) AUTO_INCREMENT PRIMARY KEY,
  `comments` text NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pid` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `fname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
';
if($con->query($sql)){
	echo 'Comment table created Successfully<br>';
}


//Create Donation Table
$sql = 'CREATE TABLE `donation` (
  `d_id` int(10) AUTO_INCREMENT PRIMARY KEY,
  `account` varchar(20) NOT NULL,
  `ammount` varchar(20) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
';
if($con->query($sql)){
	echo 'Donation table created Successfully<br>';
}
$sql = 'CREATE TABLE `visitor` (
  `id` int(5) AUTO_INCREMENT PRIMARY KEY,
  `visit_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
if($con->query($sql)){
  echo 'visitor table created Successfully<br>';
}
//Insert into users table


$sql = "INSERT INTO `visitor` (`visit_count`) VALUES
(0);";
if($con->query($sql)){
  echo 'Counter is set is set';

}
//Insert into product table


?>
<a href="index.php">Home Page</a>