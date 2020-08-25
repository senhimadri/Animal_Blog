<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">

	<title>Comila HTML CSS Template</title>
<!--
Comila Template
http://www.templatemo.com/tm-490-comila
-->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">

  	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

  	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>

</head>
<?php include_once('init.php'); ?>

<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>


  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">

          <?PHP if(isset($_COOKIE['loginAttempt']) ){ ?>
     <a href="index.php" <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>></a> 
          <h2 class="modal-title">You Are Blocked</h2>
        </div>



         <?php }else{  ?>

         <a href="index.php" <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>></a> 
          <h2 class="modal-title">Sign IN</h2>
        </div>

        <form action="loginChecker.php" method="post">
          <input name="l_email" type="email" class="form-control" id="fullname" placeholder="Enter Your Email">
          <input name="l_password" type="Password" class="form-control" id="email" placeholder="email@example.com">
          <input name="submit" type="submit" class="form-control" id="submit" value="Subscribe Now">
        </form>

       
 <?php }  ?>

        <p>Thank you for your visiting!</p>
      </div>
  </div>




<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>