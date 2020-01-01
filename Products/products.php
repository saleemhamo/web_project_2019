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
                        <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="250"
                             height="250">

                    </figure>

                </div>


                <div class="itemText">
                    <p>Name: <strong><?php echo $row['name']; ?> </strong></p>
                    <p>Price: <?php echo $row['price']; ?></p>
                    <p>Remarks: <?php echo $row['remarks'];?></p>

                </div>

                <form>
                    <input class="itemButtons" type="button" value="Add To Cart">

                </form>
                <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>" style="float: left; margin: 50px 200px 50px 20px;"><strong>More Info</strong></a>
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
                <div>

                    <figure style="float: left">
                        <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="250"
                             height="250">

                    </figure>

                </div>


                <div class="itemText">
                    <p>Name: <strong><?php echo $row['name']; ?> </strong></p>
                    <p>Price: <?php echo $row['price']; ?></p>
                    <p>Remarks: <?php echo $row['remarks'];?></p>

                </div>

                <form>
                    <input class="itemButtons" type="button" value="Add To Cart">

                </form>
                <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>" style="float: left; margin: 50px 200px 50px 20px;"><strong>More Info</strong></a>
            </a>

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
                        <img src="../images/<?php echo $row['pid'] . "/" . $f['figure']; ?>.jpg" alt="image" width="250"
                             height="250">

                    </figure>

                </div>


                <div class="itemText">
                    <p>Name: <strong><?php echo $row['name']; ?> </strong></p><br>
                    <p>Price: <?php echo $row['price']; ?></p><br>
                    <p>Remarks: <?php echo $row['remarks'];?></p>

                </div>

                <form>
                    <input class="itemButtons" type="button" value="Add To Cart">

                </form>
                <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>" style="float: left; margin: 50px 200px 50px 20px;"><strong>More Info</strong></a>
            </a>

        </section>

        <?php
    }
    ?>
</div>

</body>
</html>