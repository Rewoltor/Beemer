<?php

//empty inputs kezelő
function emptyInputSignup($email, $vez_nev, $phone_number, $pwd, $pwdrepeat) {
    $result;
    if (empty($email) || empty($vez_nev) || empty($phone_number) || empty($pwd) || empty($pwdrepeat)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


//ez a rész nekem nem számít mert nincsen ilyen dolog nélam
/*
function invalidUid($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
*/

//wrong phone numver valudator
function invalidPhone($phone_number) {
    $result;
    if (preg_match('/^[+][0-9]/', $phone_number)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//invalud email valuidator
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

//matchin password validator
function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if ($pwd !== $pwdrepeat) {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


//existing email validator
function EmailExists($conn, $email) {
    $sql = "SELECT * FROM clients WHERE clientsEmail = ?;";
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


//signupp client to the website
function createClient($conn, $email, $vez_nev, $phone_number, $pwd, $registerTime) {
    $sql = "INSERT INTO clients (clientsEmail, clientsVez_nev, clients_phone_number, clientsPwd, registerTime) VALUES ( ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed1");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    //jere is the loadupt to the server
    mysqli_stmt_bind_param($stmt, "sssss", $email, $vez_nev, $phone_number, $hashedPwd, $registerTime);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=loginsuccess"); //post register path
    exit();
}

 //login error handler
function emptyInputLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginclient($conn, $email, $pwd) {
    $emailexists = EmailExists($conn, $email);

    if ($emailexists === false) {
        header ("location: ../login.php?error=emaildontexist");
        exit();
    }

    $pwdHashed = $emailexists["clientsPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header ("location: ../login.php?error=wrongpassword1");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION['clientsId'] = $emailexists['clientsId'];
        $_SESSION['clientsEmail'] = $emailexists['clientsEmail'];
        header ("location: ../client_page.php"); //after login path
        exit();
    }
}
