<?php

if (isset($_POST["submit"])) {

    $vez_nev = $_POST["vez_nev"];
    $registerId = uniqid (rand (),true); 
    $registerTime = date('y-m-d h:i:s');
    $clientsId = $_POST["clientsId"];
    $usersEmail = $_POST["email"];

    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($vez_nev) !== false) {
        header("location: ../register.php?error=emptyinput1");
        exit();
    }

    createUser($conn, $vez_nev, $registerTime, $usersEmail, $registerId, $clientsId);

}
else {
    header("location: ../register.php?wattafaka");
    exit();
}
