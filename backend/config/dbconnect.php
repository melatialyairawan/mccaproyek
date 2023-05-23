<?php

$server = "db_mysql";
$user = "root";
$password = "root";
$db = "swiss_collection2";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>