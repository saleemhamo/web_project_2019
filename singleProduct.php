<!doctype html>
<html>
<head>
    <title><?php echo "";?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<article>
    <main>
        <?php
        include("header.php");
        include 'dbConf.php';

        if(isset($_GET['pid'])) {


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
            <section id="SingleItems">
                <a href="singleProduct.php">
                    <div>
                        <?php
                          foreach ($images as $image)
                          {  ?>
                              <figure>
                            <img src = "images/<?php echo $row['pid'] . "_" . $image['figure']; ?>.jpg" alt = "image"
                                 width = "100" height = "100" >
                             </figure>
                        <?php
                        }
                        ?>
                    </div>

                    <div>


                        <p><?php echo $row['name'] ?></p>

                        <p><?php echo $row['price'] ?></p>

                        <p><?php echo $row['remarks'] ?></p>

                        <a href="">More Info</a>

                    </div>
                </a>
            </section>



<!--            <a href="add.php?&book_id=.".$data['id']> add </a>-->


            <?php
        }
        ?>




    </main>
</article>



<?php include 'footer.html';?>

</body>

</html>
