<?php

if (isset($_POST["submit"])) {

    $vez_nev = $_POST["vez_nev"];
    $sex = $_POST["sex"];
    $birthday = $_POST["my-input"];
    #generates the unique registration id
    $registerId = uniqid (rand (),true); 
    #generates date variable
    $registerTime = date('y-m-d h:i:s');
    $school = $_POST["school"];


    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($vez_nev, $sex, $birthday, $registerId, $registerTime, $school) !== false) {
        header("location: ../register.php?error=emptyinput1");
        exit();
    }

    createUser($conn, $vez_nev, $sex, $birthday, $registerId, $registerTime, $school);

}
else {
    header("location: ../register.php?wattafaka");
    exit();
}
