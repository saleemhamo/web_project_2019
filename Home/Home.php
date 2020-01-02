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

   if(!isset($_SESSION['loggedIn']))
   {
       $loggedIn = false;

   }
   else
   {
       $loggedIn = true;

   }

    for( $i= 1 ; $i <= 6 ; $i++)
    {
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

        ?>
        <section class="homeProducts">
                 <form id="items"   method="post" action="../Products/singleProduct.php?pid=<?php echo $row['pid']; ?>">
                 <figure>
                            <img id="myImg" src="../images/<?php echo $row['pid'] . "/" . $image['figure']; ?>.jpg" alt="image"
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
    function addToCart(){


    }

    ?>
</main>

</article>

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
<?php include '../HeaderAndFooter/footer.html';?>
</html>
