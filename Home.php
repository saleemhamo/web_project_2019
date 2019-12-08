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
  <?php
  session_name("login");
  session_start();
  $host = "1170381.studentswebprojects.ritaj.ps";
           $username = "c107_1170381_19";
           $password = "comp334!";
           $database = "c107_project_store";
  $message = "";
  try
  {
     $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);
     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     if(isset($_POST["login"]))
     {
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
         $message = '<label>All fields are required</label>';
        }
        else
        {
         $query = "SELECT * FROM customer WHERE email = :email AND password = :password";
         $statement = $connect->prepare($query);
         $statement->execute(
            array(
               'email'     =>     $_POST["email"],
               'password'     =>     $_POST["password"] ,




            )
         );
         $count = $statement->rowCount();
         if($count > 0)
         {  					 $_SESSION["email"] = $_POST["email"];
            header("location:main.php");
     }
         else
         {
            $message = '<label>Wrong Data</label>';
         }
        }
     }
  }
  catch(PDOException $error)
  {
     $message = $error->getMessage();
  }
  ?>
<form action="Home.php" method="post" id="login" class="col-30" style="width: 30%">
    <div>
        <img src="images/shop.png" alt="Logo" width="120" hight="80">
    </div>

    <div>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required  class="form-control"/>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required  class="form-control"/>
        <input type="submit" name="login" class="btn btn-info" value="Login" />
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
