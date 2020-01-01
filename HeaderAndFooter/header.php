<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>


<div class="navbar">

    <a href="../Home/Home.php" style="padding: 0px"><img src="../images/shop.png" alt="icon" width="60" height="50"></a>
    <a href="../Home/Home.php">Home</a>
    <a href="../Registration/Registration.php">Register</a>
    <!--    <a href="products.php">Products</a>-->
    <a href="../Admin/Admin.php"">Admin Panel</a>
    <a href="../ContactUs/ContactUs.php">Contact Us</a>
    <a href="../AboutUs/AboutUs.php" style="float:left">About Us</a>
    <div class="dropdown">
        <!--        <a href="products.php">-->
        <button class="dropbtn">Products
            <i class="fa fa-caret-down"></i>
        </button>
        <!--        </a>-->
        <!--         TODO scrollllll-->
        <div class="dropdown-content">
            <a href="../Products/products.php#clothes">Clothes</a>
            <a href="../Products/products.php#cosmetics">Cosmetics</a>
            <a href="../Products/products.php#paintings">Paintings </a>
        </div>
    </div>


    <?php if (isset($_SESSION['loggedIn'])) {
        ?>

        <a href="../Login/logout.php" style="float:right">Logout</a>
        <?php
    } else { ?>
        <a href="../Login/login.php" style="float:right">Login</a>
        <?php
    } ?>

    <div class="label1">
        <h1>Sharara Store</h1>
        <form action="../search/searchResult.php" method="get">

            <input type="text" value="Search" name="searchValue">

            <input type="submit" value="Search">
        </form>
    </div>

    <br>
</div>


</body>
</html>
