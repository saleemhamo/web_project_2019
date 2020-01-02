<?php
include("../HeaderAndFooter/header.php");
include("../shared/dbConf.php");
?>
<!doctype html>
<html>
<head>
    <title>Search Result</title>
    <link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body style="margin-top: 150px">
<div id="result">
    <h1 class="label2">Search Result</h1>
    <?php
    $sqlStatement = "SELECT * FROM products WHERE name LIKE '%". $_GET['searchValue']."%'";
    $result = $pdo->query($sqlStatement);
    $rows = $result->fetchAll();

    foreach ($rows as $row) {
        $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
        $result = $pdo->query($sqlStatement);
        $images = $result->fetchAll();
        if (!empty($images[0])) {
            $f = $images[0];
        }
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
                    <p><?php echo $row['name'] ?></p>

                    <p><?php echo $row['price'] ?></p>

                    <p><?php echo $row['remarks'] ?></p>

                </div>

                <form>
                    <input class="itemButtons" type="button" value="Add To Cart">
                </form>
            </a>
        </section>
        <?php
    }
    ?>
</div>
</body>
</html>
