<?php

//empty inputs kezelő
function emptyInputSignup($email, $vez_nev, $ker_nev, $pwd, $pwdrepeat, $sex, $phone_number, $birthday) {
    $result;
    if (empty($email) || empty($vez_nev) || empty($pwd) || empty($pwdrepeat) || empty($sex) || empty($birthday)) {
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


//signupp user to the website
function createUser($conn, $email, $vez_nev, $pwd, $sex, $birthday) {
    $sql = "INSERT INTO users (usersEmail, usersVez_nev, usersPwd, userssex, usersbirthday) VALUES ( ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../register.php?error=stmtfailed1");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    //jere is the loadupt to the server
    mysqli_stmt_bind_param($stmt, "sssss", $email, $vez_nev, $hashedPwd, $sex, $birthday);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    $emailexists = EmailExists($conn, $email);
    $_SESSION['userId'] = $emailexists['userId'];
    $_SESSION['usersEmail'] = $emailexists['usersEmail'];
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
        $_SESSION['userId'] = $emailexists['userId'];
        $_SESSION['usersEmail'] = $emailexists['usersEmail'];
        header ("location: ../start_test.php"); //after login path
        exit();
    }
}
