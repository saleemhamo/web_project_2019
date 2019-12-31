 <?php
 session_name('loggedIn');
 session_start();
session_destroy();
 header("location:../Home/Home.php");
 ?>  
