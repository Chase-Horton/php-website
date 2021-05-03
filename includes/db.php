<?php

$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "future";

$con = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

if(!$con){
    die("Connection to database failed, " . mysqli_connect_error()) ;
}