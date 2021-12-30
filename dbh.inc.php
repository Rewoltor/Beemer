<?php

/*

$serverName = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "beemer1"; //name of mysql database xampp




mysql://b9ef600568e8bb:54568896@eu-cdbr-west-02.cleardb.net/heroku_a2617a8aba34162?reconnect=true

*/


$serverName = "eu-cdbr-west-01.cleardb.com";
$dBUsername = "bfef03bc6baad8";
$dBPassword = "d8944d55";
$dBName = "heroku_87332ee8d6e83a2"; //name of mysql database xampp



$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
