<?php

//this file handles the conenction to the database I user xampp for this purpose

$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "b299ddca64ae62";
$dBPassword = "d334430a";
$dBName = "heroku_33f95cbce167fe1";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}