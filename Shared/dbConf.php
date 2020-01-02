<?php

$dbhost = "localhost";
$dbuser = "c107_1170381_19";
$dbpass = "comp334!";
$dbname = "c107applicationdb1170381";
//$dbname = "web_project_1170381";
// create PDO Object:
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

if(!$pdo ) {
    die("Could not connect to database");
}

//else echo "Connected to Database";

?>