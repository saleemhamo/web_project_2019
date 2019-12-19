<?php
session_name('loggedIn');
session_start();
?>
<?php

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
        if(isset($_SESSION['loggedIn']))
        {
            $loggedIn = true;
        }
        else
        {
            $loggedIn = false;

        }
        ?>

            <section id="login">

                <form action="login.php" method="post">
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
                    header("location:Home.php");



                } else {
                    echo "Incorrect Password!";

                }
            } else {
                echo $_POST['email'] . "Does not Exist!";
            }
        }
        ?>


    </main>

</article>
</body>
<?php include 'footer.html';?>
</html>
