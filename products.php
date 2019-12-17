<?php include 'dbConf.php';
include 'header.php';?>
<!doctype html>
<html>
<head>
    <title>Art Works</title>
</head>
<body>
<?php

$sqlStatement = "SELECT * FROM products";
// Prepare the results
$result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
$rows = $result->fetchAll();



foreach ($rows as $row)
{
    $sqlStatement = "SELECT * FROM images WHERE pid = '".$row['pid']."'";
// Prepare the results
    $result = $pdo->query($sqlStatement);
// Execute the SQL query and get all rows
    $images = $result->fetchAll();
    if (!empty($images[0])) {
        $f = $images[0];
    }

echo $row['pid'];
    ?>
    <section id="SingleItems">
        <a href=" <?php echo "singleProduct.php?&pid=".$row['pid'];?>">
            <div>

            <figure style="float: left">
                <img src="images/<?php echo $row['pid']."_".$f['figure'];?>.jpg" alt="image" width="350" height="350">
            </figure>

        </div>


        <div>


                    <p><?php echo $row['name']?></p>

                    <p><?php echo $row['price']?></p>

                    <p><?php echo $row['remarks']?></p>

                    <a href="">More Info</a>

        </div>
        </a>
    </section>
    <?php
}




?>







</body>
</html>