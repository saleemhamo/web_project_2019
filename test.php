<?php

$_SESSION['loggedIn'] = [];
//$_SESSION['loggedIn'] = $row;
$_SESSION['loggedIn']['cart']= [];

array_push($_SESSION['loggedIn']['cart'],"123");
print_r($_SESSION['loggedIn']['cart']);
array_push($_SESSION['loggedIn']['cart'],"789");
print_r($_SESSION['loggedIn']['cart']);
?>



?>






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
            </section>

            <?php
        }
        ?>


    </main>
</article>


<?php include '../HeaderAndFooter/footer.html'; ?>

</body>

</html>
