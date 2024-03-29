<?php

require_once '../../dbh.inc.php';

//signupp user to the website
function createUser($conn, $Vez_nev, $registerTime, $usersEmail,  $registerId, $clientsId) {
    $sql = "INSERT INTO users (usersVez_nev, registerTime, usersEmail, registerId, clientsId) VALUES ( ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed1");
        exit();
    }
    else{
        //here is the loagoupt to the server
        session_start();
        $_SESSION['registerId'] = $registerId;
        $_SESSION['clientsId'] = $clientsId;
        mysqli_stmt_bind_param($stmt, "sssss", $Vez_nev, $registerTime, $usersEmail,  $registerId, $clientsId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../start_test.php"); //post register path
        exit();
    }

}

//existing email validator
function registerIdExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmt");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $email, $pwd) {
    $emailexists = EmailExists($conn, $email);

    if ($emailexists === false) {
        header ("location: ../login.php?error=emaildontexist");
        exit();
    }

    $pwdHashed = $emailexists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header ("location: ../login.php?error=wronglogin1");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION['userId'] = $conn['userId'];
        header ("location: ../start_test.php"); //after login path
        exit();
    }
}

//empty inputs kezelő
function emptyInputSignup($vez_nev) {
    $result;
    if (empty($vez_nev)) {
        $result = true;  #this should be true but just for this to work and for thes
    }
    else {
        $result = false;
    }
    return $result;
}