<?php
session_name('loggedIn');
session_start();

include '../Shared/dbConf.php';
include '../HeaderAndFooter/header.php';
?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color:#4CAF50; margin-top: 150px;">

<article>
    <main>
        <?php

        if (!isset($_SESSION['loggedIn'])) {
            $loggedIn = false;

        } else {
            $loggedIn = true;

        }

        for ($i = 1; $i <= 6; $i++) {
            $sqlStatement = "SELECT * FROM products WHERE pid = '" . $i . "'";
            // Prepare the results
            $result = $pdo->query($sqlStatement);
            // Execute the SQL query and get all rows
            $row = $result->fetch();
            $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
            // Prepare the results
            $result = $pdo->query($sqlStatement);
            // Execute the SQL query and get all rows
            $images = $result->fetchAll();
            if (!empty($images[0])) {
                $image = $images[0];
            }
            $n = 0
            ?>
            <section class="homeProducts">
                <form id="items" method="post" action="../Products/singleProduct.php?pid=<?php echo $row['pid']; ?>">
                    <figure>
                        <img id="myImg" src="../images/<?php echo $row['pid'] . "/" . $image['figure']; ?>.jpg"
                             alt="<?php echo $row['name'] ?>"
                             width="200" height="200">
                    </figure>
                    <br>
                    <ul>
                        <li>
                            <?php echo $row['name'] ?>
                        </li>
                        <li>
                            <?php echo $row['price'] ?>$
                        </li>
                    </ul>
                    <!--            input type="button" value="Add To cart" name="addToCart" onclick="addToCart()"></input></td>  </tr>-->
                    <input type="submit" value="View Product"/>
                </form>
            </section>
            <?php
        }
        function addToCart()
        {
        }

        ?>
    </main>
</article>

</body>
<?php include '../HeaderAndFooter/footer.html'; ?>
</html>
