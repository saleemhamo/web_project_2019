<?php
       echo session_name();
 ?>
<!doctype html>
<html>
<head>
<!--    <title>Sharara Store</title>-->
<!--    <link rel="stylesheet" type="text/css" href="style.css">-->
</head>
<style>
    /* Navbar container */
    .navbar {
        overflow: hidden;
        background-color: #333;
        font-family: Arial;
    }

    /* Links inside the navbar */
    .navbar a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    /* The dropdown container */
    .dropdown {
        float: left;
        overflow: hidden;
    }

    /* Dropdown button */
    .dropdown .dropbtn {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit; /* Important for vertical align on mobile phones */
        margin: 0; /* Important for vertical align on mobile phones */
    }

    /* Add a red background color to navbar links on hover */
    .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
    }

    /* Dropdown content (hidden by default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    /* Add a grey background color to dropdown links on hover */
    .dropdown-content a:hover {
        background-color: #ddd;
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
        display: block;
    }


</style>
<body>


<div class="navbar">

    <a href="Home.php" style="padding: 0px"><img src="images/shop.png" alt="icon" width="60" height="50"></a>
    <a href="Home.php">Home</a>
    <a href="Registration.php">Register</a>
<!--    <a href="products.php">Products</a>-->
    <a href="Admin.php">Admin Panel</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="customerPanel.php">Customer</a>

    <div class="dropdown">
        <button class="dropbtn">Products
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="products.php#clothes">Clothes</a>
            <a href="products.php#cosmetics">Cosmetics</a>
            <a href="products.php#paintings">Paintings </a>
        </div>
    </div>
    <a href="search.php" style="float:right">Search</a>
    <a href="AboutUs.php" style="float:right">About Us</a>
    <a href="logout.php" style="float:right">Logout</a>
</div>

<h1 class="label1">Sharara Store</h1>
<br>



</body>
</html>
