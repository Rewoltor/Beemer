<?php

/*

$serverName = "localhost:3307";
$dBUsername = "root";
$dBPassword = "";
$dBName = "beemer2"; //name of mysql database xampp

*/




$serverName = "eu-cdbr-west-02.cleardb.net";
$dBUsername = "be3af6a7f33914";
$dBPassword = "b21f38e3";
$dBName = "heroku_655e61146892d2a"; //name of mysql database xampp



//mysql://be3af6a7f33914:b21f38e3@eu-cdbr-west-02.cleardb.net/heroku_655e61146892d2a?reconnect=true

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}
