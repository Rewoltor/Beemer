<?php

/*

$serverName = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "beemer1"; //name of mysql database xampp


mysql://b9ef600568e8bb:54568896@eu-cdbr-west-02.cleardb.net/heroku_a2617a8aba34162?reconnect=true

*/

$serverName = "eu-cdbr-west-02.cleardb.net";
$dBUsername = "b9ef600568e8bb";
$dBPassword = "54568896";
$dBName = "heroku_a2617a8aba34162"; //name of mysql database xampp




$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

