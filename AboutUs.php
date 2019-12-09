<?php
?>
<?php

session_name("login");
session_start();

if(isset($_SESSION["email"]))
{
     echo '<h3>Login Success, Welcome - '.$_SESSION["email"].'</h3>';
}
else
{
  header("location:Home.php");
}

?>

<!doctype html>

<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:white">
  <nav id = "mainNav">

      <ul>
          <li><img src="images/shop.png" alt="icon" width="60" height="40"></li>
          <li><a href="Home.php">Home</a></li>
      </ul>

  </nav>
<p>The system will display information about this site. Be sure to mention that this site
is hypothetical and was created as a term project for COMP334 Course at Birzeit
University. As well, be sure to list the group member names and roughly what parts
of the project each member implemented.</p>



<h1 class="container">Sharara Store</h1>



</body>
</html>
