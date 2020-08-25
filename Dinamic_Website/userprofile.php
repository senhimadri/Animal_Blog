<!DOCTYPE html>

<html>
<head>
	<?php include_once 'partial/head.php'; ?>
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
   
    
 

    <?php 
  include_once('dbcon.php');
  $con = connect();
  $id = $_SESSION['userid'];
  $userName=$_SESSION['fname'];
  $sql = "SELECT * FROM ds_user WHERE d_fname = '$userName'";
  $result = $con->query($sql);


  


      if(isset($_POST['btnUpdate'])){
      $ufname = $_POST['fname'];
      $ulname = $_POST['lname'];
      $uemail = $_POST['email'];
      $uaddress = $_POST['address'];
      $uphone = $_POST['phone'];
      $password = $_POST['password'];


      $sql = "UPDATE ds_user SET d_fname='$ufname',d_lname='$ulname',d_email='$uemail',d_address='$uaddress',d_animal='$uphone',d_password1='$password' WHERE d_userid='$id'";
      
     
      $con->query($sql);
       header("location:userprofile.php");

      
     }?>


<?php
 if(!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] == false){

  echo "You Have to loged in to see this page";}
 
else {
  
  
  
 ?>
 
<h2>Your Profile</h2>

 <table id="customers" class="table center table-hover text-justify  table-responsive ">
    
   
  <?php 
  $sql = "SELECT * FROM ds_user WHERE d_userid=$id";
		$result = $con->query($sql);

  foreach($result as $prd){ 
  
      $id     = $prd['d_userid'];
      $fname     = $prd['d_fname'];
      $lname  = $prd['d_lname'];
      $email   = $prd['d_email'];
      $address    = $prd['d_address'];
      $phone    = $prd['d_animal'];
      $pass     = $prd['d_password1'];
  }

			$_SESSION['fname'] = $prd['d_fname'];
			$_SESSION['lname'] = $prd['d_lname'];
			$_SESSION['email'] = $prd['d_email'];
			$_SESSION['address'] = $prd['d_address'];
			$_SESSION['phone'] = $prd['d_animal'];
			$_SESSION['pass'] = $prd['d_password1'];


  
  ?>

    <tr>
    <th>User Id:</th>
    <td><?=$prd['d_userid']?></td>
    </tr>
    <tr>
    <th>First Name:</th>
    <td><?=$prd['d_fname']?></td>
    </tr>
    <tr>
    <th>Last Name:</th>
    <td><?=$prd['d_lname']?></td>
    </tr>
    <tr>
    <th>Email:</th>
    <td><?=$prd['d_email']?></td>
    </tr>
    <tr>
    <th>Address:</th>
    <td><?=$prd['d_address']?></td>
    </tr>
    <tr>
    <th>Phone:</th>
    <td><?=$prd['d_animal']?></td>
    </tr>
    <
    <th>Password:</th>
    <td><?=$prd['d_password1']?></td>
    </tr>
    
 

    
 
</table>


<br><br><br><br><br>
    <div class="">
    <h2>Update Your Information</h2>
<form class="needs-validation" novalidate action="" method="post" enctype="multipart/form-data">
     
     <div class="form-group">
       <label for="nm">Edit First Name</label>
      <input type="text" class="form-control" name="fname" id="name"  value="<?=$fname?>" required>
      <div class="invalid-feedback">
      </div>
      </div> 
      <div class="form-group">
      <label for="padd">Edit Last Name</label>
      <input type="text" class="form-control" name="lname" id="address"  value="<?=$lname?>" required>
      <div class="invalid-feedback">
      </div>
      </div> 
      
      <div class="form-group ">
      <label for="pcode">Edit Your Email</label>
      <input type="text" class="form-control" name="email" id="p_code"  value="<?=$email?>" required>
      <div class="invalid-feedback">
      </div>
      </div> 
      <div class="form-group ">
      <label for="cont">Edit Your Address</label>
      <input type="text" class="form-control" name="address" id="phone"  value="<?=$address?>" required>
      <div class="invalid-feedback">
      </div>
      </div> 
      <div class="form-group">
      <label for="exampleInputEmail1">New Phone No</label>
      <input type="email" class="form-control user-email" name="phone" value="<?=$phone?>" required>
      <div class="invalid-feedback">
      </div>
      </div>
      <div class="form-group">
      <label >New Password</label>
      <input type="password" class="form-control" name="password" value="<?=$pass?>" required>
      <div class="invalid-feedback">
      </div>
      </div>
  <div class="form-group">
      <input type="submit" name="btnUpdate" class="btn btn-primary submit-btn" value="Submit">
    <!--  <button type="submit" class="btn btn-primary">Submit</button>-->
    </div>
    </form>
  <?php } ?>

</div>
</div>
</div>


</body>
</html>

<style type="text/css">
  

  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    color:black;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: black;
    color: white;
}


.form-control{
        background: transparent;

        color:white;

        font-size: 15px;
  }
  .jjj{
        background: transparent;
  }

</style>