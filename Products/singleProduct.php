<?php
session_name('loggedIn');
session_start();
include("../HeaderAndFooter/header.php");
include '../shared/dbConf.php';

?>
<!doctype html>
<html>
<head>
    <title><?php echo ""; ?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="margin-top: 150px;">
<article>
    <main>
        <?php

        if (isset($_GET['pid'])) {


            $sqlStatement = "SELECT * FROM products WHERE pid = '" . $_GET['pid'] . "'";
            // Prepare the results
            $result = $pdo->query($sqlStatement);
            // Execute the SQL query and get all rows
            $row = $result->fetch();
            $sqlStatement = "SELECT * FROM images WHERE pid = '" . $row['pid'] . "'";
            // Prepare the results
            $result = $pdo->query($sqlStatement);
            // Execute the SQL query and get all rows
            $images = $result->fetchAll();
            ?>
            <section id="SingleItemsPage">
                <div style="width: 100%; height = 300px; position: center;">
                    <?php foreach ($images as $image){
                        ?>

                            <figure style="float: left;">
                                <img src="../images/<?php echo $row['pid'] . "/" . $image['figure']; ?>.jpg" alt="image"
                                     width="300" height="300" onClick="window.open(this.src)">
                                     

                            </figure>

                        <?php
                    }
                    ?>

                </div>

                <table  style="width: 100%; margin: 100px;" border="1">

                    <tr>
                        <td>
                            Name :
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            price :
                        </td>
                        <td>
                            <?php echo $row['price'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name :
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Name :
                        </td>
                        <td>
                            <?php echo $row['name'] ?>
                        </td>
                    </tr>



                </table>

                <div   style="width: 100%; height = 100px;">
                    <button>Add to Cart!</button>
                </div>

            </section>

            <?php
        }
        ?>


    </main>
</article>


<?php include '../HeaderAndFooter/footer.html'; ?>

</body>

</html>
