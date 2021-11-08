<?php
session_start();


//function page of the php, it handles the data input to ther database from the questionaire



//    1   send inputs to sql server
function createTest1($conn, $userId, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10) {  //variables that are used
    $sql = "INSERT INTO test1 (userId, test1q1, test1q2, test1q3, test1q4, test1q5, test1q6, test1q7, test1q8, test1q9, test1q10) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"; //insert value
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_1.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_2.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    2   send inputs to sql server
function createTest2($conn, $userId, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20) {
    $sql = "INSERT INTO test2 (userId, test1q11, test1q12, test1q13, test1q14, test1q15, test1q16, test1q17, test1q18, test1q19, test1q20) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_2.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_3.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    3   send inputs to sql server
function createTest3($conn, $userId, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30) {
    $sql = "INSERT INTO test3 (userId, test1q21, test1q22, test1q23, test1q24, test1q25, test1q26, test1q27, test1q28, test1q29, test1q30) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_3.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_4.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    4   send inputs to sql server
function createTest4($conn, $userId, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40) {
    $sql = "INSERT INTO test4 (userId, test1q31, test1q32, test1q33, test1q34, test1q35, test1q36, test1q37, test1q38, test1q39, test1q40) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_4.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_5.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    5   send inputs to sql server
function createTest5($conn, $userId, $q41, $q42, $q43, $q44, $q45, $q46, $q47, $q48, $q49, $q50) {
    $sql = "INSERT INTO test5 (userId, test1q41, test1q42, test1q43, test1q44, test1q45, test1q46, test1q47, test1q48, test1q49, test1q50) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_5.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q41, $q42, $q43, $q44, $q45, $q46, $q47, $q48, $q49, $q50);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_6.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    6   send inputs to sql server
function createTest6($conn, $userId, $q51, $q52, $q53, $q54, $q55, $q56, $q57, $q58, $q59, $q60) {
    $sql = "INSERT INTO test6 (userId, test1q51, test1q52, test1q53, test1q54, test1q55, test1q56, test1q57, test1q58, test1q59, test1q60) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_6.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q51, $q52, $q53, $q54, $q55, $q56, $q57, $q58, $q59, $q60);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_7.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    7   send inputs to sql server
function createTest7($conn, $userId, $q61, $q62, $q63, $q64, $q65, $q66, $q67, $q68, $q69, $q70) {
    $sql = "INSERT INTO test7 (userId, test1q61, test1q62, test1q63, test1q64, test1q65, test1q66, test1q67, test1q68, test1q69, test1q70) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_7.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q61, $q62, $q63, $q64, $q65, $q66, $q67, $q68, $q69, $q70);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_8.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    8   send inputs to sql server
function createTest8($conn, $userId, $q71, $q72, $q73, $q74, $q75, $q76, $q77, $q78, $q79, $q80) {
    $sql = "INSERT INTO test8 (userId, test1q71, test1q72, test1q73, test1q74, test1q75, test1q76, test1q77, test1q78, test1q79, test1q80) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_8.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q71, $q72, $q73, $q74, $q75, $q76, $q77, $q78, $q79, $q80);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_9.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    9   send inputs to sql server
function createTest9($conn, $userId, $q81, $q82, $q83, $q84, $q85, $q86, $q87, $q88, $q89, $q90) {
    $sql = "INSERT INTO test9 (userId, test1q81, test1q82, test1q83, test1q84, test1q85, test1q86, test1q87, test1q88, test1q89, test1q90) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_9.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q81, $q82, $q83, $q84, $q85, $q86, $q87, $q88, $q89, $q90);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_10.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    10   send inputs to sql server
function createTest10($conn, $userId, $q91, $q92, $q93, $q94, $q95, $q96, $q97, $q98, $q99, $q100) {
    $sql = "INSERT INTO test10 (userId, test1q91, test1q92, test1q93, test1q94, test1q95, test1q96, test1q97, test1q98, test1q99, test1q100) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_10.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q91, $q92, $q93, $q94, $q95, $q96, $q97, $q98, $q99, $q100);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_11.php?success=yeeymami"); //link to the next page of tests   I need to set path to the final page or whatever I want to send them to
    exit();
}

//    11   send inputs to sql server
function createTest11($conn, $userId, $co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10) {
    $sql = "INSERT INTO test11 (userId, co1, co2, co3, co4, co5, co6, co7, co8, co9, co10) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_11.test.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: ../test_final.php?success=yeeymami"); //link to the next page of tests   I need to set path to the final page or whatever I want to send them to
    exit();
}
/*
function createTest11($conn, $userId, $q101, $q102, $q103, $q104, $q105, $q106, $q107, $q108, $q109, $q110) {
    $sql = "INSERT INTO test11 (userId, test1q101, test1q102, test1q103, test1q104, test1q105, test1q106, test1q107, test1q108, test1q109, test1q110) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../test_11.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }

$co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10
co1, co2, co3, co4, co5, co6, co7, co8, co9, co10

co1, co2, co3, co4, co5, co6, co7, co8, co9, co10
$co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10

*/