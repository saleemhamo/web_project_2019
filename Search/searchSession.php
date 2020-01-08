<?php
session_name('search');
session_start();

$_SESSION['search']['filter'] =  $_GET['filter'];

header('Location: searchResult.php?searchValue='.$_SESSION['search']['searchValue']);

?>