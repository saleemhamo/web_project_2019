<?php
include '../Shared/dbConf.php';
// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    if (!$pdo) {
        die("Could not connect to database");
    }

    // Write the SQL statement string to select all items
    $sqlStatement = "UPDATE products SET name = '".$_POST['name']."' , category = '". $_POST['category']."', price = '".$_POST['price']."' , description = '".$_POST['description']."' , size = '".$_POST['size']."', remarks = '".$_POST['remarks']."', quantity = '".$_POST['quantity']."' WHERE name= '".$_POST['name']."'";
    $result = $pdo->query($sqlStatement);

    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


    $sqlStatement = "SELECT * FROM products WHERE name = '" . $_POST['name']."'";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $row = $result->fetch();

    header("Location: Admin.php");
} ?>
