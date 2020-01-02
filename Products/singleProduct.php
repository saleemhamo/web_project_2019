<?php
session_name('loggedIn');
session_start();
include("../HeaderAndFooter/header.php");
include '../Shared/dbConf.php';

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../style.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
</head>
<body style="margin-top: 150px">

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
            <?php foreach ($images as $image) {
                ?>

                <figure style="float: left; margin: 10px 100px 20px 100px;">
                    <img id="myImg" src="../images/<?php echo $row['pid'] . "/" . $image['figure']; ?>.jpg" alt="image"
                         width="170" height="200">
                </figure>

                <?php
            }
            ?>
                <table class="singleProduct">
                    <tr style="height: 50px">

                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            category
                        </th>
                        <th>
                            price
                        </th>
                        <th>
                            description
                        </th>
                        <th>
                            size
                        </th>
                        <th>
                            remarks
                        </th>



                    </tr>
                    <tr>
                        <th>
                            <?php echo $row['pid'] ?>

                        </th>

                        <th>
                            <?php echo $row['name'] ?>
                        </th>

                        <th>
                            <?php echo $row['category'] ?>
                        </th>

                        <th>   <?php echo $row['price'] ?>
                        </th>

                        <th><?php echo $row['description'] ?>
                        </th>

                        <th>   <?php echo $row['size'] ?>
                        </th>

                        <th> <?php echo $row['remarks'] ?>
                        </th>
                    </tr>
                </table>

            <a href="<?php echo "../Shared/addToCart.php?pid=".$row['pid'];?>" class="itemButtons" style="margin: 10px 50% 10px 20px;"> Add To cart</a>



        </div>
    </section>

    <?php
}
?>


<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById("myImg");
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
</script>

</body>
</html>
