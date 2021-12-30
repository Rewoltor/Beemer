<?php
session_start();
require_once '../../dbh.inc.php';

//signupp user to the website
function createUser($conn, $userId, $feedback, $email) {

     $sql = "INSERT INTO feedback (userId, feedback, email) VALUES ( ?, ?, ?);";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: email_regist.php?error=stmtfailed1");
         exit();
     }
     else{
         //here is the loagoupt to the server
         mysqli_stmt_bind_param($stmt, "sss", $userId, $email, $feedback);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_close($stmt);
         header("location: ../report.php?success=yeeymami"); //post register path
         exit();
     }
 
 }


//empty inputs kezelő
function emptyInputSignup($email) {
    $result;
    if (empty($email)) {
        $result = true; 
    }
    else {
        $result = false;
    }
    return $result;
}

/*

function createUser($conn, $feedback, $email) {

    #$sql = "UPDATE users SET email = '$email' , feedback = '$feedback' WHERE $registerId";
     $sql = "UPDATE users SET email = 'kaka'  WHERE $registerId";
     $sql = "INSERT INTO feedback (registerId, feedback, email) VALUES ( ?, ?, ?);";
     $stmt = mysqli_stmt_init($conn);
     if (!mysqli_stmt_prepare($stmt, $sql)) {
         header("location: functions.inc.php?error=stmtfailed1");
         exit();
     }
     else{
         //here is the loagoupt to the server
         mysqli_stmt_bind_param($stmt, "sss", $registerId, $email, $feedback);
         mysqli_stmt_execute($stmt);
         mysqli_stmt_close($stmt);
         header("location: ../report.php?success=yeeymami"); //post register path
         exit();
     }
 
 }

 */