<?php
include '../Shared/dbConf.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $sql = "DELETE FROM products WHERE pid=".$_POST['delete_id'];
    $conn->exec($sql);


}




?>