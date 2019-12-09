<?php

session_name("login");
session_start();
//
//if(isset($_SESSION["email"]))
//{
//     echo '<h3>Login Success, Welcome - '.$_SESSION["email"].'</h3>';
//}
//else
//{
//  header("location:Home.php");
//}

?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<article>
    <main>
    <?php include("header.php");?>

<p>The system will display information about this site. Be sure to mention that this site
is hypothetical and was created as a term project for COMP334 Course at Birzeit
University. As well, be sure to list the group member names and roughly what parts
of the project each member implemented.</p>
    </main>
</article>



    <?php include 'footer.html';?>

</body>

</html>
