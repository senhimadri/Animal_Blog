<?php session_start(); ?>
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
  <?php include_once('dbcon.php'); ?>

</head>
<body>
<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){ ?>



<?php  }else{?>



<header>
 <div class="nav">
      <ul>
        <li class="home"><a href="index.php">Home</a></li>
        <li class="forum"><a href="forum.php">Forum</a></li>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 1){ ?>
        <li class="users"><a href="userlist.php">Users</a></li>

        <?php }?>
        <li class="donation"><a href="donation.php">Donation</a></li>
        <li class="logout"><a href="logout.php">Logout</a></li>
        <li class="name"><a href="userprofile.php"><?php echo $_SESSION['fname'];?></a></li>
         


      </ul>

      
    </div>
  </header>
<?php }?>

  

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


<!-- home section -->
<section id="home">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12">
        <div class="home-thumb">


          <h1 class="wow fadeInUp" data-wow-delay="0.4s">Spencer Animal Shelter</h1>

        

                <h3 class="wow fadeInUp" data-wow-delay="0.6s">We are almost <strong>ready to launch</strong> our <strong>new creative</strong> website!</h3>

                <?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] ==false){ ?>
      
                <a href="login.php"  class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Log In</a>


                <a href="registrationfrom.php"  class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s"> Registration</a>
                <?php } ?>
         

        </div>
      </div>

    </div>
  </div>    
</section>





<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">
<div class="ppp">
     <marquee>
    <?php
    
    
        //Feed URLs
        $feeds = array(
            "http://www.lifewithdogs.tv/feed/"
        );
        
        //Read each feed's items
        $entries = array();
        foreach($feeds as $feed) {
            $xml = simplexml_load_file($feed);
            $entries = array_merge($entries, $xml->xpath("//item"));
        }
        
        //Print all the entries
        foreach($entries as $entry){
            ?>
            <a href="<?= $entry->link ?>"><?= $entry->title ?></a> |
            <?php
        }
         
        ?>
        </marquee>
    </div> 

      <div class="col-md-6 col-sm-12">
        <img src="images/about-img.png" class="img-responsive wow fadeInUp" alt="About">
      </div>

			<div class="col-md-6 col-sm-12">
				<div class="about-thumb">
					<div class="section-title">
						<h1 class="wow fadeIn" data-wow-delay="0.2s">our company</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.4s">Comila Studio is based in Hong Kong</h3>
					</div>
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<p>Vivamus elit risus, porttitor id placerat ut, aliquet non quam. Pellentesque nulla metus, ornare et porttitor vel, consectetur vitae erat. Vestibulum tristique semper tellus vitae condimentum. Duis sed eros eget diam dictum posuere.</p>
						<p>Aliquam vel gravida ligula. Phasellus ut purus ac libero ultrices commodo commodo at quam. In vestibulum purus sit amet tempus euismod. Donec sed congue nisl.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- feature section -->
<section id="feature">
  <div class="container">
    <div class="row">
      
      <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Responsive</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.8s">
          <div class="media-object media-left">
            <i class="icon icon-refresh"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object media-left">
            <i class="icon icon-chat"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="clearfix text-center col-md-12 col-sm-12">
        <a href="#contact" class="btn btn-default smoothScroll">Talk to us</a>
      </div>

    </div>
  </div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="section-title">
					<h1 class="wow fadeInUp" data-wow-delay="0.3s">Get in touch</h1>
					<p class="wow fadeInUp" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				</div>
				<div class="contact-form wow fadeInUp" data-wow-delay="1.0s">
					<form id="contact-form" method="post" action="#">
                        <div class="col-md-6 col-sm-6">
                          	<input name="name" type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 col-sm-6">
                          	<input name="email" type="email" class="form-control" placeholder="Your Email" required>
                        </div>
           			  	<div class="col-md-12 col-sm-12">
				   			<textarea name="message" class="form-control" placeholder="Message" rows="6" required></textarea>
           			  	</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="submit" type="submit" class="form-control submit" id="submit" value="SEND MESSAGE">
						</div>
					</form>
				</div>
			</div>
	
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">

      <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>



?>
      <div class="col-md-4 col-sm-6">
        <h2>Total Visitor <?php include_once 'visitorCount.php';  ?></h2>
    
        
      </div>

      <div class="col-md-1 col-sm-1"></div>

      <div class="col-md-4 col-sm-5">
        <h2>Our Studio</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          120-240 aliquam augue libero,<br>
          Convallis in vulputate 10220 <br>
          San Francisco, CA, USA
        </p>
        <ul class="social-icon">
          <li><a href="https://www.facebook.com/" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="https://twitter.com" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
          <li><a href="https://www.behance.net/" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
          <li><a href="https://dribbble.com/tags/social-media" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
        </ul>
      </div>

		</div>
	</div>
</footer>


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

 <style type="text/css">
      
      .ppp{

        font-size: 30px;
        font-color: #000000;
      }
    </style>