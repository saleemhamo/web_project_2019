
 <?php

session_name("searched");
session_start();
include("header.php");
 ?>
 <html>

 <body>
   <form action="search.php" method="post">
   <input type="text" name="search" style="float:right;margin: 2px; padding: 5px;width: 300px;height: 44px;">
   <input type="submit"  name="submit">
 </form>
 </body>
 </html>
<?php
if(isset($_POST["submit"]))  {
 $_SESSION["search"] = $_POST["search"];
     header("location:searchResult.php");
   }
 ?>
