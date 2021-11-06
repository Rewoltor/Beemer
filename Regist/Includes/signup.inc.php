<?php

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $vez_nev = $_POST["vez_nev"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $sex = $_POST["sex"];
    $birthday = $_POST["my-input"];

    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email, $vez_nev, $ker_nev, $pwd, $pwdrepeat , $sex, $phone_number, $birthday) !== false) {
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
    createUser($conn, $email, $vez_nev, $pwd, $sex, $birthday);

}
else {
    header("location: ../register.php?wattafaka");
    exit();
}