<?php

$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "b299ddca64ae62";
$dBPassword = "d334430a";
$dBName = "heroku_33f95cbce167fe1"; //name of mysql database xampp

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}