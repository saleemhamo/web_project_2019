<?php
session_name('loggedIn');
session_start();
include '../Shared/dbConf.php';

?>
<!doctype html>
<html>
<head>
    <title>Sharara Store</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body style="background-color:#4CAF50; margin-top: 150px;">
<?php
if(empty($_SESSION['loggedIn']['cart'])){
    ?>
    <script>
        alert("Your Basket is Empty!");
        window.location = "shoppingBasket.php";
    </script>

<?php
}

?>


<script>
    alert("Card Number For Abu Maher is 1111 and the password is the same!");
</script>
<article>
    <main>
        <section id="login" style="height: 200px">

            <form action="configureCreditCard.php" method="post" class="myForm">


                <div>
                    <label for="creditCard"><b>Credit Card</b></label>
                    <input type="text" placeholder="Enter Credit Card Number" name="creditCard" required
                           class="form-control"/>

                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required class="form-control"/>
                    <input style="float: left; margin: 15px 100px 10px 260px;" type="submit" name="login"
                           value="Submit"/>
                </div>
            </form>


            <?php


            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                if ($_SESSION['loggedIn']['cardNumber'] == $_POST['creditCard']) {
                if ($_SESSION['loggedIn']['password'] == $_POST['password']) {
                    ?>

                    <script>
                        window.location = 'placeOrder.php';
                    </script>
                <?php
                }else{
                ?>
                    <script>
                        alert("Wrong password!");
                    </script>
                <?php
                }
                }else{
                ?>
                    <script>
                        alert("Wrong Card Number!");
                    </script>
                    <?php
                }

            }

            ?>

    </main>

</article>
</body>
<?php include '../HeaderAndFooter/footer.html'; ?>
</html>
