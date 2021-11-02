<?php

$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "b6d7d2af4e92a7";
$dBPassword = "eca95a20";
$dBName = "heroku_e271e2732b53cfa"; //name of mysql database xampp


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}


mysql://b719a558f1a02c:d917ca76@eu-cdbr-west-01.cleardb.com/heroku_395edb95820112d?reconnect=true