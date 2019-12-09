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
  header("location:/phpAssigt/Home.php");
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

        <li><a href="Registration.php">Register</a></li>
        <li><a href="">Art Works</a></li>
        <li><a href="" >Artists</a></li>
        <li style="float:right"><a href="AboutUs.php">About Us</a></li>
        <li style="float:right"><a href="ContactUs.php">Contact Us</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
    </ul>

</nav>
<h1 class="container">Sharara Store</h1>



</body>
</html>
