<?php
    session_start();

    if (isset($_SESSION['usersEmail'])) {
        //echo  $_SESSION['usersEmail'];
    } else {
        echo    "Sajnos még nem jelentkezett be";
    }


//create link to pass session id
$email = $_SESSION['usersEmail'];

$emaillink = "http://146.110.195.87:8887/test/Client/Link.php?name=" . $email ;

//echo $emaillink;

echo $email;

