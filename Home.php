<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
    include 'header.php';
    $loggedIn= false;

    if($loggedIn)
    {?>

        <section id="login">

            <h1> Welcome!</h1>
        </section>

        <?php
    }
    else {?>


        <section id="login">

            <form action="Home.php" method="post">
                <div>
                    <img src="images/shop.png" alt="Logo" width="120" hight="80">
                </div>

                <div>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required  class="form-control"/>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required  class="form-control"/>
                    <input type="submit" name="login" class="btn btn-info" value="Login" />
                </div>
            </form>
        </section>


        <?php

    }

    if($_SERVER['REQUEST_METHOD'] === 'POST' ) {

    }?>

    <aside>
        <table id="items" style="width:50%" >
            <h2>Best Selling Product</h2>
            <tr> <td><img src="images/shop.png" alt="image" width="200" hight="100"> </td></tr>

            <tr><td>name</td></tr>

            <tr><td>description</td></tr>

            <tr><td>price</td></tr>

            <tr> <td> <button> Add To Chart! </button></td>  </tr>
        </table>
    </aside>




    <?php
    for( $i= 1 ; $i <= 6 ; $i++)
    {
        ?>
        <article>
            <table id="items">
                <tr> <td><img src="images/<?php echo $i;?>.jpg" alt="image" width="120" hight="80"> </td></tr>

                <tr><td>name</td></tr>

                <tr><td>description</td></tr>

                <tr><td>price</td></tr>

                <tr> <td> <button> Add To Chart! </button></td>  </tr>
            </table>
        </article>

        <?php
    }
    ?>
</div>

</body>
<?php include 'footer.html';?>
</html>
