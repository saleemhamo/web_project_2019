<?php
session_name('loggedIn');
session_name('cart');
session_start();

include 'dbConf.php';


?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:#4CAF50">

<article>
<main>
    <?php
    include 'header.php';
   if(!isset($_SESSION['loggedIn']))
   {
       $loggedIn = false;

   }
   else
   {
       $loggedIn = true;

   }

    if($loggedIn)
    {?>
        <section id="login">

            <h1> Welcome <?php echo $_SESSION['loggedIn']?></h1>


        </section>

        <?php
    }

?>




    <?php
    for( $i= 1 ; $i <= 6 ; $i++)
    {
        ?>
        <section>
            <table id="items">
                <tr> <td><a href="images/<?php echo $i;?>.jpg"><img src="images/<?php echo $i;?>.jpg" alt="image" width="120" height="80"></a></td></tr>

                <tr><td>name</td></tr>

                <tr><td>description</td></tr>

                <tr><td>price</td></tr>

                <tr> <td> <button> Add To Chart! </button></td>  </tr>
            </table>
        </section>

        <?php
    }
    ?>
</main>

</article>
</body>
<?php include 'footer.html';?>
</html>
