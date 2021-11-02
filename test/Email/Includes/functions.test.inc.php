<?php
session_start();

//    1   send inputs to sql server
function createTest1($conn, $userId, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10) {
    $sql = "INSERT INTO test1 (userId, test1q1, test1q2, test1q3, test1q4, test1q5, test1q6, test1q7, test1q8, test1q9, test1q10) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_1.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $userId, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_2.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    2   send inputs to sql server
function createTest2($conn, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20) {
    $sql = "INSERT INTO test1 (test1q11, test1q12, test1q13, test1q14, test1q15, test1q16, test1q17, test1q18, test1q19, test1q20) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_2.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_3.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    3   send inputs to sql server
function createTest3($conn, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30) {
    $sql = "INSERT INTO test1 (test1q21, test1q22, test1q23, test1q24, test1q25, test1q26, test1q27, test1q28, test1q29, test1q30) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_3.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_4.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    4   send inputs to sql server
function createTest4($conn, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40) {
    $sql = "INSERT INTO test1 (test1q31, test1q32, test1q33, test1q34, test1q35, test1q36, test1q37, test1q38, test1q39, test1q40) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_4.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_5.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    5   send inputs to sql server
function createTest5($conn, $q41, $q42, $q43, $q44, $q45, $q46, $q47, $q48, $q49, $q50) {
    $sql = "INSERT INTO test1 (test1q41, test1q42, test1q43, test1q44, test1q45, test1q46, test1q47, test1q48, test1q49, test1q50) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_5.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q41, $q42, $q43, $q44, $q45, $q46, $q47, $q48, $q49, $q50);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_6.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    6   send inputs to sql server
function createTest6($conn, $q51, $q52, $q53, $q54, $q55, $q56, $q57, $q58, $q59, $q60) {
    $sql = "INSERT INTO test1 (test1q51, test1q52, test1q53, test1q54, test1q55, test1q56, test1q57, test1q58, test1q59, test1q60) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_6.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q51, $q52, $q53, $q54, $q55, $q56, $q57, $q58, $q59, $q60);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_7.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    7   send inputs to sql server
function createTest7($conn, $q61, $q62, $q63, $q64, $q65, $q66, $q67, $q68, $q69, $q70) {
    $sql = "INSERT INTO test1 (test1q61, test1q62, test1q63, test1q64, test1q65, test1q66, test1q67, test1q68, test1q69, test1q70) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_7.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q61, $q62, $q63, $q64, $q65, $q66, $q67, $q68, $q69, $q70);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_8.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    8   send inputs to sql server
function createTest8($conn, $q71, $q72, $q73, $q74, $q75, $q76, $q77, $q78, $q79, $q80) {
    $sql = "INSERT INTO test1 (test1q71, test1q72, test1q73, test1q74, test1q75, test1q76, test1q77, test1q78, test1q79, test1q80) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_8.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q71, $q72, $q73, $q74, $q75, $q76, $q77, $q78, $q79, $q80);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_9.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    9   send inputs to sql server
function createTest9($conn, $q81, $q82, $q83, $q84, $q85, $q86, $q87, $q88, $q89, $q90) {
    $sql = "INSERT INTO test1 (test1q81, test1q82, test1q83, test1q84, test1q85, test1q86, test1q87, test1q88, test1q89, test1q90) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_9.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q81, $q82, $q83, $q84, $q85, $q86, $q87, $q88, $q89, $q90);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_10.php?success=yeeymami"); //link to the next page of tests
    exit();
}

//    10   send inputs to sql server
function createTest10($conn, $q91, $q92, $q93, $q94, $q95, $q96, $q97, $q98, $q99, $q100) {
    $sql = "INSERT INTO test1 (test1q91, test1q92, test1q93, test1q94, test1q95, test1q96, test1q97, test1q98, test1q99, test1q100) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: test_10.php?error=stmtfailed1"); //error massage of connection error, varivable or format inorrect
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ssssssssss", $q91, $q92, $q93, $q94, $q95, $q96, $q97, $q98, $q99, $q100);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    session_start();
    header("location: test_11.php?success=yeeymami1"); //link to the next page of tests   I need to set path to the final page or whatever I want to send them to
    exit();
}

