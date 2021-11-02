<?php



//Get information from email
$email = htmlspecialchars($_GET["name"]);
//http://example.com/?name=Hannes  this is the amail

//create link to pass session id
//$email = $_SESSION['usersEmail'];

echo $email;



//check if email exists in database
//this checks if the client has entered the registration email of the testtaker
$mysqli = new mysqli(SERVER, DBUSER, DBPASS, DATABASE);
$result = $mysqli->query("SELECT * WHERE users WHERE usersEmail = '$email'");
if($result->num_rows == 0) {
     // row not found, do stuff...
} else {
    // do other stuff...
}
$mysqli->close();