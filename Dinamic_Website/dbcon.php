<?php

function connect($setup=false){
	$host='localhost';
	$user='root';
	$pass='';
	$database='DW_00165658';
	if($setup)
		$con = new mysqli($host,$user,$pass);
	else
		$con = new mysqli($host,$user,$pass,$database);
	
	if($con->connect_error){
		die("connection failed:" .$con->connect_error);
	}
	return $con;
}
?>