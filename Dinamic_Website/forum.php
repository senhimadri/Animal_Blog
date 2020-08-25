<!DOCTYPE html>

<html>
<head>
	<?php include_once 'partial/head.php'; ?>
  <?php include_once('dbcon.php');?>
</head>

	<script>

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('Submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>





<body id="top">

	<div class="wrapper bgded overlay" style="background-image:url('images/slide-2.jpg');">
  <?php include_once 'partial/nav.php'; ?>
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h2>Upload Your Post</h2>
        <form action="forumcheker.php" method="POST" class="needs-validation" novalidate enctype="form-data">
  <div class="form-group">
   <label for="nm"><h4>Post Title</h4></label>
    <input type="text" class="form-control" name="title" id="nm"  placeholder="Type Your Post Title">
    
    <label for="lm"><h4>Type Your Post</h4></label>
    <input type="text" class="form-control" name="post" id="lm"  placeholder="">
    
   <br>
  <input type="submit" name="btn_post" class="btn btn-primary" value="Submit">
 </div>
</form>
 
</div>
</div>

 <div class="wrapper row2">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <h1>See what people say</h1><br><br>



    <ul class="nospace group cta">
<?php
$con = connect();
	$sql = "SELECT * FROM `forum`,`ds_user` WHERE forum.user_id=ds_user.d_userid ORDER BY pdate DESC";
	$result = $con->query($sql);
	// echo $result;
?>
<?php foreach($result AS $prd){ ?>

<h2 class="color"><?=$prd['ptitle']?></h2>
<h4><?=$prd['d_fname']?></h4>
<p><?=$prd['ppost']?></p>

<div>
	<form action="forumcheker.php" method="POST">
		<input type="hidden" name="post_id" value="<?=$prd['pid']?>">
		<input type="text" name="comments"><br>
		<button type="submit" name="btn_comment">Post Comment</button>
	</form>

</div>
<div>
<?php 
	$postIdForComment = $prd['pid'];
	$sql = "SELECT * FROM `coments` WHERE pid=$postIdForComment";
	$result = $con->query($sql);
foreach($result AS $coments){ 
?>

 <h5><?=$coments['fname']?></h5>
<p><?=$coments['comments']?></p>




<?php } ?>
</div>
<?php } ?>
    </ul>

    <!-- ################################################################################################ -->
  </div>
</div>



  

</body>
</html>

<style type="text/css">
  .form-control{
        background: transparent;}

  .color{

    color: black;

  }
</style>