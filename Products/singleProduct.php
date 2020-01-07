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

        .myImage div{background-color: #95a5a6;width: 400px;overflow: hidden;margin: 50px auto;padding: 20px;}
        .myImage img{border: 2px solid #fff;}

        .myImage div button:first-of-type{float: left;}
        .myImage div button:last-of-type{float: right;}

        .myImage button{background-color: #fff; color: #27ae60; border: 2px solid #27ae60;
            font-size: 20px; font-weight: bold; width: 50px; cursor: pointer;padding: 5px;}

    </style>

    <script>

        var i = 0,images =
            ["images/1/fig1.jpg",
            "images/1/fig2.jpg",
            "images/1/fig3.jpg"];

        function mySlide(param)
        {
            if(param === 'next')
            {
                i++;
                if(i === images.length){ i = images.length - 1; }
            }else{
                i--;
                if(i < 0){ i = 0; }
            }

            document.getElementById('slide').src = images[i];
        }

    </script>
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
    $pid = $row['pid'];
    ?>
    <section id="SingleItemsPage">
        <div style="width: 100%; height = 300px; position: center;">
<!--            --><?php //foreach ($images as $image) {
                ?>

                <figure style="float: left; margin: 10px 200px 20px 30%;" class="myImage">
<!--                    <img id="image" src="../images/--><?php //echo $row['pid'] . "/" . $image['figure']; ?><!--.jpg" alt="image"-->
<!--                         width="170" height="200">-->
                    <button onclick="mySlide('prev');"><</button>
                    <img class="row" src="../images/<?php echo $pid;?>/fig1.jpg" id="slide" alt="" width="400" height="400">

                    <button onclick="mySlide('next');">></button>

            </figure>


                <?php
//            }
            ?>
                <table class="singleProduct">
                    <tr style="height: 50px; color: white">

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
    img = document.getElementById("slide");
    // Get the image and insert it inside the modal - use its "alt" text as a caption
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
<script>

    var i = 0,images = [
        "../images/<?php echo $pid;?>/fig1.jpg",
        "../images/<?php echo $pid;?>/fig2.jpg",
        "../images/<?php echo $pid;?>/fig3.jpg"];

    function mySlide(param)
    {
        if(param === 'next')
        {
            i++;
            if(i === images.length){ i = images.length - 1; }
        }else{
            i--;
            if(i < 0){ i = 0; }
        }

        document.getElementById('slide').src = images[i];
    }


</script>
</body>
</html>
