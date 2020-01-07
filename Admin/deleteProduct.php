<?php
session_name('loggedIn');
session_start();
include '../Shared/dbConf.php';

// sql to delete a record
$sql = "DELETE FROM products WHERE pid=".$_GET['pid'];

// use exec() because no results are returned
$pdo->exec($sql);

?>
<script>
    window.location = "Admin.php";


</script>