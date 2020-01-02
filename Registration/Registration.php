<?php
session_name('loggedIn');
session_start();
?>
<!doctype html><?php include '../Shared/dbConf.php';
?>
<?php
include("../HeaderAndFooter/header.php");
?>
<html>

<head>
    <link rel="stylesheet" href="../style.css">

</head>


<body style="margin-top: 150px">
<div>

    <!--Registration Form-->
    <form class="myForm" id="register" method="post" action="Registration.php">
        <fieldset>
            <legend><h2>Register</h2></legend>

            <div class="row">
                <div class="col-30">
                    <label for="name">Name</label>
                </div>
                <div class="col-40">
                    <input type="text" name="name" placeholder="Enter your name..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="email">Email</label>
                </div>
                <div class="col-40">
                    <input type="email" name="email" placeholder="Enter your email..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="password">Password</label>
                </div>
                <div class="col-40">
                    <input type="password" name="password" placeholder="Enter password..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="dateOfBirth">Date of Birth</label>
                </div>
                <div class="col-40">
                    <input type="date" name="dateOfBirth" placeholder="Enter your Date Of Birth..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="address">Address</label>
                </div>
                <div class="col-40">
                    <input type="text" name="address" placeholder="Enter your Address..">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="phone">Telephone</label>
                </div>
                <div class="col-40">
                    <input type="number" name="phone" placeholder="Enter your phone number..">
                </div>
            </div>

            <div class="row">
                <input type="submit" name="submit">
            </div>
        </fieldset>
    </form>
</div>
<!--TODO email login alert-->
<?php

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // This file contains the database access information.
    // This file also establishes a connection to MySQL
    // and selects the database.
    // Set the database access information as constants:

    // create PDO Object:
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    if (!$pdo) {
        die("Could not connect to database");
//    } else echo "Connected to Database";


    $dob = $_POST['dateOfBirth'];
    $res = explode('-', $dob);
    //ymd
    $day = $res[0];
    $month = $res[1];
    $year = $res[2];
    $newDate = $day . "-" . $month . "-" . $year;


    // Write the SQL statement string to select all items
    $sqlStatement = "INSERT INTO customers (name , email, address , telephone , password, dateOfBirth) VALUES (?,?,?,?,?,?)";
    // Prepare the statement
    $stmt = $pdo->prepare($sqlStatement);
    // Execute the SQL query and get all rows
    $status = $stmt->execute([$_POST['name'], $_POST['email'], $_POST['address'], $_POST['phone'], $_POST['password'], $newDate]);

    // Check the status
    if ($status) {
        ?>
        <script>
            window.location = '../Login/login.php';
        </script>

<?php
    }
//        echo 'Data inserted successfully';
    } else {
        echo "ERROORR";

        echo $stmt->$error;
    }


} ?>


</body>
<?php include '../HeaderAndFooter/footer.html'; ?>

</html>
