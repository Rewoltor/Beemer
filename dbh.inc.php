<?php
/*
$serverName = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "beemer1"; //name of mysql database xampp




*/

$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "bfef03bc6baad8";
$dBPassword = "d8944d55";
$dBName = "heroku_87332ee8d6e83a2"; //name of mysql database xampp



$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
