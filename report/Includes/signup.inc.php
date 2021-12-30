<?php
session_start();
$userId = $_SESSION['userId'];

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $feedback = $_POST["feedback"];


    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($email) !== false) {
        header("location: ../email_regist.php?error=emptyinput15");
        exit();
    }

    createUser($conn, $userId, $email, $feedback);

}
else {
    header("location: ../email_regist.php?wattafaka");
    exit();
}
