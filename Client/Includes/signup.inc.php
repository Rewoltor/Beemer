<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $vez_nev = $_POST["vez_nev"];
    $phone_number = $_POST["phone_number"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $registerTime = date('y-m-d h:i:s');

    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email, $vez_nev, $phone_number, $pwd, $pwdrepeat) !== false) {
        header("location: ../register.php?error=emptyinput1");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../register.php?error=passwordmatch");
        exit();
    }

    if (EmailExists($conn, $email) !== false) {
        header("location: ../register.php?error=existingemail");
        exit();
    }
/*
    if (invalidPhone($phone_number) !== false) {
        header("location: ../register.php?error=invalidphone");
        exit();
    }
*/
    createClient($conn, $email, $vez_nev, $phone_number, $pwd, $registerTime);

}
else {
    header("location: ../register.php?wattafaka");
    exit();
}
