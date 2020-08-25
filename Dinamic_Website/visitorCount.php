<?php 
include_once('dbcon.php');
$con = connect();

$sql = "SELECT visit_count FROM visitor";

$result=$con->query($sql);

foreach($result as $row){
	$count=$row['visit_count'];
}

$counter= $count+1;

$sql = "UPDATE visitor SET visit_count= $counter";
$result=$con->query($sql);
echo $counter;

?>