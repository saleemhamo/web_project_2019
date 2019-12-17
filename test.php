<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
</head>
<body>

<div class="navbar">

    <a href="Home.php" style="padding: 0px"><img src="images/shop.png" alt="icon" width="60" height="50"></a>
    <a href="Home.php">Home</a>
    <a href="Registration.php">Register</a>
    <a href="products.php">Products</a>
    <a href="Admin.php">Admin Panel</a>
    <a href="ContactUs.php">Contact Us</a>
    <a href="customerPanel.php">Customer</a>

    <div class="dropdown">
        <button class="dropbtn">Dropdown
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="#">Clothes</a>
            <a href="#">Paintings</a>
            <a href="#">Mud </a>
        </div>
    </div>

    <a href="AboutUs.php" style="float:right">About Us</a>
    <a href="logout.php" style="float:right">Logout</a>
    <input type="text" value="Search" style="float:right; padding: 5px">

</div>

<h1 class="label1">Sharara Store</h1>
<br>

</body>
</html>


<!--<ul>-->
<!--    <li><a href="Home.php" style="padding: 0px"><img src="images/shop.png" alt="icon" width="60" height="50"></a></li>-->
<!--    <li><a href="Home.php">Home</a></li>-->
<!---->
<!--    <li><a href="Registration.php">Register</a></li>-->
<!--    <li><a href="products.php">Products</a></li>-->
<!--    <li><a href="Admin.php">Admin Panel</a></li>-->
<!--    <li><a href="ContactUs.php">Contact Us</a></li>-->
<!--    <li><a href="customerPanel.php">-->
<!--            <Customer></Customer>-->
<!--        </a></li>-->
<!---->
<!---->
<!--    <li style="float:right"><a href="AboutUs.php">About Us</a></li>-->
<!--    <li style="float:right"><a href="logout.php">Logout</a></li>-->
<!--    <li style="float:right; padding: 5px"><input type="text" value="Search"></li>-->
<!--</ul>-->
<!---->
<!--<nav class="mainNav">-->
<!---->
<!--    <ul>-->
<!--        <li><a href="Home.php" style="padding: 0px"><img src="images/shop.png" alt="icon" width="60" height="50"></a></li>-->
<!--        <li><a href="Home.php">Home</a></li>-->
<!---->
<!--        <li><a href="Registration.php">Register</a></li>-->
<!--        <li><a href="products.php">Products</a></li>-->
<!--        <li><a href="Admin.php" >Admin Panel</a></li>-->
<!--        <li><a href="ContactUs.php" >Contact Us</a></li>-->
<!--        <li><a href="customerPanel.php" ><Customer></Customer></a></li>-->
<!---->
<!---->
<!--        <li style="float:right"><a href="AboutUs.php">About Us</a></li>-->
<!--        <li style="float:right"><a href="logout.php">Logout</a></li>-->
<!--        <li style="float:right; padding: 5px"><input type="text" value="Search"></li>-->
<!--    </ul>-->
<!---->
<!--</nav>-->