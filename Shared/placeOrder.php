<?php
session_name('loggedIn');
session_start();
include "../Shared/dbConf.php";
?>
<!doctype html>

<head>

</head>
<body>
<script>
    alert("Your order is submitted!")
</script>


<?php

    foreach ($_SESSION['loggedIn']['cart'] as $pid) {

        $sqlStatement = "INSERT INTO buy( pid , cid) VALUES (?,?)";
        $stmt = $pdo->prepare($sqlStatement);
        $status = $stmt->execute([$pid,$_SESSION['loggedIn']['cId']]);
        if ($status) {

            unset($_SESSION['loggedIn']['cart']);
            $_SESSION['loggedIn']['cart']=[];
            ?>
            <script>
            window.location = '../Home/Home.php';
            </script>
            <?php




        } else {
            echo $stmt->error;
        }
    }

//    if (($key = array_search($pid, $_SESSION['loggedIn']['cart'])) !== false) {
//        unset($_SESSION['loggedIn']['cart'][$key]);
//    }

?>

<!--<script>-->
<!--    window.location = '../Home/Home.php';-->
<!--</script>-->
</body>
</html>