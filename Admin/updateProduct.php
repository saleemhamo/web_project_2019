<?php
session_name('loggedIn');
session_start();
?>
<!doctype html><?php include '../Shared/dbConf.php';
?>
<?php
include("../HeaderAndFooter/header.php");
include("../HeaderAndFooter/adminHeader.php");
?>
<html>

<head>
    <link rel="stylesheet" href="../style.css">
    <style>
        .col-30{
            margin-left: 30px;
        }
    </style>
</head>


<body style="margin-top: 150px">
<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    if (!$pdo) {
        die("Could not connect to database");
    }

    $sqlStatement = "SELECT * FROM products WHERE pid =" . $_GET['pid'];
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $row = $result->fetch();

} ?>
<div>
    <form style="background-color: grey; margin: 20px" class="myForm" method="post" action="update.php">
        <fieldset>
            <legend><h2>Update Product</h2></legend>

            <div class="row">
                <div class="col-30">
                    <label for="name">Name</label>
                </div>
                <div class="col-40">
                    <input type="text" name="name" value="<?php echo $row['name']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="email">Category</label>
                </div>
                <div class="col-40">
                    <input type="text" name="category" value="<?php echo $row['category']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="password">Price</label>
                </div>
                <div class="col-40">
                    <input type="text" name="price" value="<?php echo $row['price']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="dateOfBirth">Description</label>
                </div>
                <div class="col-40">
                    <input type="text" name="description" value="<?php echo $row['description']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="address">Size</label>
                </div>
                <div class="col-40">
                    <input type="text" name="size" value="<?php echo $row['size']?>">
                </div>
            </div>

            <div class="row">
                <div class="col-30">
                    <label for="phone">Remarks</label>
                </div>
                <div class="col-40">
                    <input type="text" name="remarks" value="<?php echo $row['remarks']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="phone">Quantity</label>
                </div>
                <div class="col-40">
                    <input type="number" name="quantity" value="<?php echo $row['quantity']?>">
                </div>
            </div>

            <div class="row">
                <input type="submit" name="submit" style="background-color: #333333; float: left; margin-left: 50%">
            </div>
        </fieldset>
    </form>
</div>







</body>
<?php include '../HeaderAndFooter/footer.html'; ?>

</html>
