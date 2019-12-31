<?php
session_name('loggedIn');
session_start();
?>

<!doctype html>
<html lang="en">
<head>
</head>
<body>
<?php
if(isset($_SESSION['loggedIn']))
{
    array_push($_SESSION['loggedIn']['cart'],$_GET['pid']);
} else {
    echo "Login first";
}

print_r($_SESSION['loggedIn']['cart']);

//header("location:home.php");
?>
</body>
</html>