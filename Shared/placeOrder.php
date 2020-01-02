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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    foreach ($_SESSION['loggedIn']['cart'] as $pid) {

        $sqlStatement = "INSERT INTO buy VALUES (?,?)";
        $stmt = $pdo->prepare($sqlStatement);
        $status = $stmt->execute($pid, $_SESSION['loggedIn']['cid']);
        if ($status) {

            unset($_SESSION['loggedIn']['cart']);
            $_SESSION['loggedIn']['cart']= [];
        } else {
            echo $stmt->error;
        }
    }
}
?>

<script>
    window.location = '../Home/Home.php';
</script>
</body>
</html>