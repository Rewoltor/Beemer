<?php
//this file is the same as fucntions.test.php  but for simplicity I am adding it here.
//Whem the cognitive test part is ready this shall be added back to the other file. The code in the test_11.php shall be modifyed to refer to that file

//    1   send inputs to sql server
function createTestCogn($conn, $userId, $co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10) {
    $sql = "INSERT INTO test11 (userId, co1, co2, co3, co4, co5, co6, co7, co8, co9, co10) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_1.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sikeres_test.php?success=yeeymami"); //link to the next page of tests
    exit();
}




//    1   send inputs to sql server
function createTestCogn1($conn, $co10) {
    $sql = "INSERT INTO test11 (co10) VALUES (?) WHERE userId='".$userId."'";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../fitter.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $co10);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../sikeres_test.php?success=yeeymami"); //link to the next page of tests
    exit();
}

