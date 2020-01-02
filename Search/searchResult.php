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
                  <br>
                       <ul>
                           <li>
                               <?php echo $row['name'] ?>
                           </li>
                           <li>
                               <?php echo $row['price'] ?>$
                           </li>
                       </ul>
                    <form>
                      <a href="<?php echo "../shared/addTocart.php?pid=" . $row['pid']; ?>" class="itemButtons"
                         style="margin: 120px 10px 50px 20px;"> Add To cart</a>
                      <a href=" <?php echo "singleProduct.php?&pid=" . $row['pid']; ?>"
                         style="float: left; margin: 0px 200px 10px 20px;"><strong>More Info</strong></a>
                    </form>
                </div>


            </a>
        </section>
        <?php
    }
    ?>
</div>
</body>
</html>
