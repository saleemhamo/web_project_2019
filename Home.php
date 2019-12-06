<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include("main.php");


 $loggedIn= false;

if($loggedIn)
{?>




<?php
}
else {?>

<form action="Home.php" method="post" id="login" class="col-30" style="width: 30%">
    <div>
        <img src="images/shop.png" alt="Logo" width="120" hight="80">
    </div>

    <div>
        <label for="username"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pasword" required>

        <input type="submit" value="Login"/>
    </div>
</form>

<?php

}

    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {



    }


for( $i= 0 ; $i < 7 ; $i++)
{  ?>
    <div class="col-30">
        <table id = "items">
            <tr> <td><img src="images/shop.png" alt="image" width="120" hight="80"> </td></tr>

            <tr><td>name</td></tr>

            <tr><td>description</td></tr>

            <tr><td>price</td></tr>

        <tr> <td> <button> Add To Chart! </button></td>  </tr>
        </table>
    </div>




<?php
}


?>



</body>
</html>