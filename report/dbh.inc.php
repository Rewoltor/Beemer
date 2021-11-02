<?php

//this file handles the conenction to the database I user xampp for this purpose

$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "b6d7d2af4e92a7";
$dBPassword = "eca95a20";
$dBName = "heroku_e271e2732b53cfa"; //name of mysql database xampp

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
