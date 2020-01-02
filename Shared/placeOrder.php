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
            echo 'Data inserted successfully';
        } else {
            echo $stmt->error;
        }
    }
}
?>

<script>
    window.location = '../home/home.php';
</script>
</body>
</html>