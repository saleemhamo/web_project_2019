<?php

$_SESSION['loggedIn'] = [];
//$_SESSION['loggedIn'] = $row;
$_SESSION['loggedIn']['cart']= [];

array_push($_SESSION['loggedIn']['cart'],"123");
print_r($_SESSION['loggedIn']['cart']);
array_push($_SESSION['loggedIn']['cart'],"789");
print_r($_SESSION['loggedIn']['cart']);
?>



?>