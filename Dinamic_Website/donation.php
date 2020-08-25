

<!DOCTYPE html>

<html>
<head>
  <?php include_once 'partial/head.php'; 
  ?>
  
</head>
 <?php  include_once('dbcon.php'); 

 $con = connect();?>
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

<?php if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == true){ ?>

<body id="top">

<?php 

     
    
      if(isset($_POST['btn_post'])){

        $account = $_POST['account'];
        $ammount = $_POST['ammount'];
        $userId = $_SESSION['userid'];
        $sql = "INSERT INTO donation (`account`,`ammount`,`user`) VALUES ('$account','$ammount',$userId)";

          $con = connect();
        $con->query($sql);
      }

$sql = "SELECT SUM(ammount)FROM donation";
    $res=$con->query($sql);
    
    foreach($res as $row){
    $sum=$row['SUM(ammount)'];
    }



?>
  <div class="wrapper bgded overlay" style="background-image:url('images/slide-1.jpg');">
  <?php include_once 'partial/nav.php'; ?>
  <div id="pageintro" class="hoc clear"> 
    
    <h2>Total Ammount of Donation is <?=$sum?> Taka</h2>
        <form action="" method="POST" class="needs-validation" novalidate enctype="form-data">
  <div class="form-group">
   <label for="nm"><h4>Enter Your Account No</h4></label>
    <input type="text" class="form-control" name="account" id="nm"  placeholder="">
    
    <label for="lm"><h4>Type Ammount</h4></label>
    <input type="text" class="form-control" name="ammount" id="lm"  placeholder="">
    
   <br>
  <input type="submit" name="btn_post" class="btn btn-primary" value="Submit">
 </div>
</form>
 
</div>
</div>


  

</body>
<?php } else{

  echo "You are Not allow to see this page";
}
?>

</html>

<style type="text/css">
  .form-control{
        background: transparent;
         font-size: 15px;
  }
</style>