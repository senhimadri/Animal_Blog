<?php 

//check cookie


if (!isset($_COOKIE['block_login'])) {
	# code...
	echo "cookie named 'block_login' is not set";
}else{
	echo "Cookie 'block_login' is set!";
    echo "Value is: " . $_COOKIE['block_login'];
}




 ?>