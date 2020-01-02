<?php
session_name('loggedIn');
session_start();
?>
<!doctype html>
<head>
</head>
<body>
<?php
if(isset($_SESSION['loggedIn']))
{
    array_push($_SESSION['loggedIn']['cart'],$_GET['pid']);
    ?>
    <script>
        alert("Added To Shopping Basket!");
    window.location = '../products/products.php';
    </script>
    <?php
} else {
    ?>
    <script>

        alert("Login First!");
        window.location = '../login/login.php';
    </script>

<?php
}

?>
</body>
</html>