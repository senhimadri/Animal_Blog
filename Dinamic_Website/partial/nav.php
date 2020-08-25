

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

<style type="text/css">
  
  body {
  margin: 0;
  padding: 0;
  background: #ccc;
}
 
.nav ul {
  list-style: none;
  background-color: rgba(255,255,255,0.5);
  text-align: center;
  padding: 0;
  margin: 0;
}
.nav li {
  font-family: 'Oswald', sans-serif;
  font-size: 1.2em;
  line-height: 40px;
  height: 40px;
  border-bottom: 1px solid #888;
}
 
.nav a {
  text-decoration: none;
  color: black;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  background-color: #005f5f;
}
 
.nav a.active {
  background-color: #fff;
  color: #444;
  cursor: default;
}
 
@media screen and (min-width: 600px) {
  .nav li {
    width: 120px;
    border-bottom: none;
    height: 50px;
    line-height: 50px;
    font-size: 1.4em;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
 
  /* Options 2 - Float
  .nav li {
    float: left;
  }
  .nav ul {
    overflow: auto;
    width: 600px;
    margin: 0 auto;
  }
  .nav {
    background-color: #444;
  }
  */
}
</style>