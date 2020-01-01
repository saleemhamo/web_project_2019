<?php
session_name('loggedIn');
session_start();
?>
<!doctype html><?php include '../shared/dbConf.php';
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
    <form class="myForm" method="post" action="addNewProduct.php">
        <fieldset>
            <legend><h2>Add Product</h2></legend>

            <div class="row">
                <div class="col-30">
                    <label for="name">Name</label>
                </div>
                <div class="col-40">
                    <input type="text" name="name" placeholder="Enter  name..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="email">Category</label>
                </div>
                <div class="col-40">
                    <input type="text" name="category" placeholder="Enter category..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="password">Price</label>
                </div>
                <div class="col-40">
                    <input type="text" name="price" placeholder="Enter price..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="dateOfBirth">Description</label>
                </div>
                <div class="col-40">
                    <input type="text" name="description" placeholder="Enter description..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="address">Size</label>
                </div>
                <div class="col-40">
                    <input type="text" name="size" placeholder="Enter size..">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="phone">Remarks</label>
                </div>
                <div class="col-40">
                    <input type="text" name="remarks" placeholder="Enter remarks..">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="phone">Quantity</label>
                </div>
                <div class="col-40">
                    <input type="number" name="quantity" placeholder="Enter quantity..">
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

    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    if (!$pdo) {
        die("Could not connect to database");
    } else echo "Connected to Database";

    // Write the SQL statement string to select all items
    $sqlStatement = "INSERT INTO products (name , category, price , description , size, remarks , quantity) VALUES (?,?,?,?,?,?,?)";
    // Prepare the statement
    $stmt = $pdo->prepare($sqlStatement);
    // Execute the SQL query and get all rows
    $status = $stmt->execute([$_POST['name'], $_POST['category'], $_POST['price'], $_POST['description'], $_POST['size'], $_POST['remarks'],$_POST['quantity']]);

    // Check the status
    if ($status) {
        echo 'Data inserted successfully';
    } else {
        echo "ERROORR";

        echo $stmt->$error;
    }


} ?>


</body>
<?php include '../HeaderAndFooter/footer.html'; ?>

</html>
