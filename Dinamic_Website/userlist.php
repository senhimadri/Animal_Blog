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

	
  <?php include_once 'partial/nav.php'; ?>

   
  <?php
    if(isset($_SESSION['role']) && $_SESSION['role'] == 1){
    include_once('dbcon.php');
    $con = connect();
    $sql = 'SELECT * FROM `ds_user`';
    $result = $con->query($sql);
    
  ?>
  <div class="dd">
         <table id="customers" >
     <thead class="thead-dark">
  <tr class="tr">
    <th>User Id:</th>
    <th>First Name:</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone:</th>
    <th>Password:</th>
  </tr>
  </thead>
  <?php foreach($result as $prd){ ?>
  <tr>
    <td><?=$prd['d_userid']?></td>
    <td><?=$prd['d_fname']?></td>
    <td><?=$prd['d_lname']?></td>
    <td><?=$prd['d_email']?></td>
    <td><?=$prd['d_address']?></td>
    <td><?=$prd['d_animal']?></td>
    <td><?=$prd['d_password1']?></td>
  
  </tr>
<?php 
  }
  }
  else{ echo 'you are not allowed to see this list.';} 
?>
</table>



 


  

</body>
</html>

<style type="text/css">
  
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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
 
</style>