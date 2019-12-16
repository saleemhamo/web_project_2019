<?php
session_name('loggedIn');
session_start();
include 'dbConf.php';


?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#4CAF50">

<article>
<main>
    <?php
    include 'header.php';
   if(!isset($_SESSION['loggedIn']))
   {
       $loggedIn = false;
   }
   else
   {
       $loggedIn = true;

   }

    if($loggedIn)
    {?>
        <section id="login">

            <h1> Welcome!</h1>
        </section>

        <?php
    }
    else {?>


        <section id="login">

            <form action="Home.php" method="post">
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
        </section>


        <?php

    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {

        $sqlStatement = "SELECT COUNT(1) FROM customers WHERE email = '" . $_POST['email'] . "'";
        // Prepare the results
        $result = $pdo->query($sqlStatement);
        // Execute the SQL query and get all rows
        $row = $result->fetch();

        if ($row[0] === "1") {
            $sqlStatement = "SELECT * FROM customers WHERE email = '" . $_POST['email'] . "'";
            $result = $pdo->query($sqlStatement);
            $row = $result->fetch();

            if ($row['password'] === $_POST['password']) {
                $_SESSION['loggedIn'] = $row['id'];

                echo "<h2>Welcome " . $row['name'] . "!</h2>";

            } else {
                echo "Incorrect Password!";

            }
        } else {
            echo $_POST['email'] . "Does not Exist!";
        }
    }
?>

    <aside>
        <h2>Best Selling Product</h2>
        <table id="items" style="width:50%" >

            <tr> <td><a href="images/shop.png"><img src="images/shop.png" alt="image" width="200" hight="100"></a></td></tr>

            <tr><td>name</td></tr>

            <tr><td>description</td></tr>

            <tr><td>price</td></tr>

            <tr> <td> <button> Add To Chart! </button></td>  </tr>
        </table>
    </aside>




    <?php
    for( $i= 1 ; $i <= 6 ; $i++)
    {
        ?>
        <section>
            <table id="items">
                <tr> <td><a href="images/<?php echo $i;?>.jpg"><img src="images/<?php echo $i;?>.jpg" alt="image" width="120" hight="80"></a></td></tr>

                <tr><td>name</td></tr>

                <tr><td>description</td></tr>

                <tr><td>price</td></tr>

                <tr> <td> <button> Add To Chart! </button></td>  </tr>
            </table>
        </section>

        <?php
    }
    ?>
</main>

</article>
</body>
<?php include 'footer.html';?>
</html>
