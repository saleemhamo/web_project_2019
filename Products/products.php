<?php
session_name('loggedIn');
session_start();

include '../shared/dbConf.php';
include '../HeaderAndFooter/header.php';

?>
<!doctype html>
<html>
<head>
    <title>Products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body style="margin-top: 150px;">
<div id="clothes">
    <h1 class="label2">Clothes</h1>
    <?php
    $sqlStatement = "SELECT * FROM products WHERE category ='clothes'";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $rows = $result->fetchAll();

    //echo $_SESSION['loggedIn'];


    foreach ($rows as $row) {
        $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
// Prepare the results
        $result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
        $images = $result->fetchAll();
        if (!empty($images[0])) {
            $f = $images[0];
        }

//echo $row['pid'];
        ?>

        <section id="SingleItems">
            <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>">
                <div>

                    <figure style="float: left">
                        <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="350"
                             height="350">
                    </figure>

                </div>


                <div>


                    <p><?php echo $row['name'] ?></p>

                    <p><?php echo $row['price'] ?></p>

                    <p><?php echo $row['remarks'] ?></p>

                    <a href="">More Info</a>

                </div>
            </a>
        </section>
        <?php
    }
    ?>
</div>
<div id="cosmetics">
    <h1 class="label2">Cosmetics</h1>
    <?php
    $sqlStatement = "SELECT * FROM products WHERE category ='cosmetics'";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $rows = $result->fetchAll();

    //echo $_SESSION['loggedIn'];


    foreach ($rows as $row) {
        $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
// Prepare the results
        $result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
        $images = $result->fetchAll();
        if (!empty($images[0])) {
            $f = $images[0];
        }

//echo $row['pid'];
        ?>

        <section id="SingleItems">

            <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>">
                <figure style="float: left">
                    <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="350"
                         height="350">
                </figure>
            </a>
            <div>
                <h1>
                    <?php echo $row['name'] ?>
                </h1>
                <p>
                    <?php echo $row['description'] ?>
                </p>
                <br>
                <ul>
                     <li> Price: <?php echo $row['price'] ?></li>
                    <li><?php echo $row['name'] ?></li>
                    <li><?php echo $row['name'] ?></li>
                    <li><?php echo $row['name'] ?></li>

                </ul>
            </div>

        </section>
        <?php
    }
    ?>
</div>
<div id="food">
    <h1 class="label2">Food</h1>
    <?php
    $sqlStatement = "SELECT * FROM products WHERE category ='food'";
    // Prepare the results
    $result = $pdo->query($sqlStatement);
    // Execute the SQL query and get all rows
    $rows = $result->fetchAll();

    //echo $_SESSION['loggedIn'];


    foreach ($rows as $row) {
        $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
// Prepare the results
        $result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
        $images = $result->fetchAll();
        if (!empty($images[0])) {
            $f = $images[0];
        }

//echo $row['pid'];
        ?>

        <section id="SingleItems">
            <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>">
                <div>

                    <figure style="float: left">
                        <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="350"
                             height="350">
                    </figure>

                </div>


                <div>


                    <p><?php echo $row['name'] ?></p>

                    <p><?php echo $row['price'] ?></p>

                    <p><?php echo $row['remarks'] ?></p>

                    <a href="">More Info</a>

                </div>
            </a>
        </section>
        <?php
    }
    ?>
</div>

</body>
</html>