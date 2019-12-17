<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "web_project_1170381";
// create PDO Object:
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser, $dbpass);

if(!$pdo ) {
    die("Could not connect to database");
}

//else echo "Connected to Database";

?>