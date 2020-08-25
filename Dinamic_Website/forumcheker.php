
<?php session_start(); ?>

<?php 
if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true){
      include_once('dbcon.php');
      $con = connect();
      if(isset($_POST['btn_post'])){

        $title = $_POST['title'];
        $post = $_POST['post'];
        $userId = $_SESSION['userid'];
        $sql = "INSERT INTO forum (`ptitle`,`ppost`,`user_id`) VALUES ('$title','$post',$userId)";
        $con->query($sql);
         header("location:forum.php");

  }


    if(isset($_POST['btn_comment'])){
        
        
        //echo 'comment block';exit;
        $postId = $_POST['post_id'];
        $comment = $_POST['comments'];
        $userId = $_SESSION['userid'];  
        $fname = $_SESSION['fname'];    
        $sql = "INSERT INTO coments (pid,comments,user_id,fname) VALUES ('$postId','$comment','$userId','$fname')";
        $con->query($sql);

        header("location:forum.php");

    }
  }


?>