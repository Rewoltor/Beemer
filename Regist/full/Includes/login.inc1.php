<?php


//van e már ilyen email cím regisztrálva
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

if (isset($_POST['submit'])) {
    require 'dbh.inc.php';

    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    if (empty($email) || empty($pwd)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } 
    
    else {
        $sql = "SELECT * FROM users WHERE usersEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        }
        else {
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
                $_SESSION["userid"] = $emailexists["userid"];
                $_SESSION['usersEmail'] = $emailexists['usersEmail'];
                header ("location: ../siker_login.php"); //bejelentkezés utáni path
                exit();
            }
        }
    }

} else {
    header("Location: ../login.php?error=dontknow");
    exit();
}