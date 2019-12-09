<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:white">


<nav id="mainNav">

    <ul>
        <li><img src="images/shop.png" alt="icon" width="60" height="40"></li>
        <li><a href="Admin.php">Home</a></li>
        <li style="float:right"><a href="logout.php">Logout</a></li>
    </ul>

</nav>
<h1 class="container">Sharara Store</h1>


</body>
</html>
<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "store";

$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$sqlStatement = "SELECT * FROM customer ";

$stmt = $pdo->query($sqlStatement);

while ($row = $stmt->fetch()) {
    $cusid = $row['cusID'];
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];
    $phone = $row['phone'];
    $password = $row['password'];?>

    <table border=2px cellspacing=10>
   <tr>
        <th>CUSTOMER ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ADDRESS</th>
        <th>PHONE</th>
        <th>Password</th>
   </tr>
    <tr>
        <td>$cusid</td>
        <td>$name</td>
        <td>$email</td>
        <td>$address</td>
        <td>$phone</td>
        <td>$password</td>
    </tr>
    </table>

    <br/>
<?php
}
?>


