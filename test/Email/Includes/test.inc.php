<?php
session_start();


// 1     test input handler for test page 
if (isset($_POST["submit"])) {

    $userId = $_SESSION['userId'];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $q9 = $_POST["q9"];
    $q10 = $_POST["q10"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest1($conn, $userId, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10);


    // 2     test input handler for test page 
} else if (isset($_POST["submit2"])) {

    $q11 = $_POST["q11"];
    $q12 = $_POST["q12"];
    $q13 = $_POST["q13"];
    $q14 = $_POST["q14"];
    $q15 = $_POST["q15"];
    $q16 = $_POST["q16"];
    $q17 = $_POST["q17"];
    $q18 = $_POST["q18"];
    $q19 = $_POST["q19"];
    $q20 = $_POST["q20"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest2($conn, $userId, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20);

    // 3     test input handler for test page 
} else if (isset($_POST["submit3"])) {

    $q21 = $_POST["q21"];
    $q22 = $_POST["q22"];
    $q23 = $_POST["q23"];
    $q24 = $_POST["q24"];
    $q25 = $_POST["q25"];
    $q26 = $_POST["q26"];
    $q27 = $_POST["q27"];
    $q28 = $_POST["q28"];
    $q29 = $_POST["q29"];
    $q30 = $_POST["q30"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest3($conn, $userId, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30);

        // 4     test input handler for test page 
} else if (isset($_POST["submit4"])) {

    $q31 = $_POST["q31"];
    $q32 = $_POST["q32"];
    $q33 = $_POST["q33"];
    $q34 = $_POST["q34"];
    $q35 = $_POST["q35"];
    $q36 = $_POST["q36"];
    $q37 = $_POST["q37"];
    $q38 = $_POST["q38"];
    $q39 = $_POST["q39"];
    $q40 = $_POST["q40"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest4($conn, $userId, $q21, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40);

        // 5     test input handler for test page 
} else if (isset($_POST["submit5"])) {

    $q41 = $_POST["q41"];
    $q42 = $_POST["q42"];
    $q43 = $_POST["q43"];
    $q44 = $_POST["q44"];
    $q45 = $_POST["q45"];
    $q46 = $_POST["q46"];
    $q47 = $_POST["q47"];
    $q48 = $_POST["q48"];
    $q49 = $_POST["q49"];
    $q50 = $_POST["q50"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest5($conn, $userId, $q41, $q42, $q43, $q44, $q45, $q46, $q47, $q48, $q49, $q50);

        // 6     test input handler for test page
} else if (isset($_POST["submit6"])) {

    $q51 = $_POST["q51"];
    $q52 = $_POST["q52"];
    $q53 = $_POST["q53"];
    $q54 = $_POST["q54"];
    $q55 = $_POST["q55"];
    $q56 = $_POST["q56"];
    $q57 = $_POST["q57"];
    $q58 = $_POST["q58"];
    $q59 = $_POST["q59"];
    $q60 = $_POST["q60"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest6($conn, $userId, $q51, $q52, $q53, $q54, $q55, $q56, $q57, $q58, $q59, $q60);

        // 7     test input handler for test page 
} else if (isset($_POST["submit7"])) {

    $q61 = $_POST["q61"];
    $q62 = $_POST["q62"];
    $q63 = $_POST["q63"];
    $q64 = $_POST["q64"];
    $q65 = $_POST["q65"];
    $q66 = $_POST["q66"];
    $q67 = $_POST["q67"];
    $q68 = $_POST["q68"];
    $q69 = $_POST["q69"];
    $q70 = $_POST["q70"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest7($conn, $userId, $q61, $q62, $q63, $q64, $q65, $q66, $q67, $q68, $q69, $q70);

        // 8     test input handler for test page 
} else if (isset($_POST["submit8"])) {

    $q71 = $_POST["q71"];
    $q72 = $_POST["q72"];
    $q73 = $_POST["q73"];
    $q74 = $_POST["q74"];
    $q75 = $_POST["q75"];
    $q76 = $_POST["q76"];
    $q77 = $_POST["q77"];
    $q78 = $_POST["q78"];
    $q79 = $_POST["q79"];
    $q80 = $_POST["q80"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest8($conn, $userId, $q71, $q72, $q73, $q74, $q75, $q76, $q77, $q78, $q79, $q80);

        // 9     test input handler for test page 
} else if (isset($_POST["submit9"])) {

    $q81 = $_POST["q81"];
    $q82 = $_POST["q82"];
    $q83 = $_POST["q83"];
    $q84 = $_POST["q84"];
    $q85 = $_POST["85"];
    $q86 = $_POST["q86"];
    $q87 = $_POST["q87"];
    $q88 = $_POST["q88"];
    $q89 = $_POST["q89"];
    $q90 = $_POST["q90"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest9($conn, $userId, $q81, $q82, $q83, $q84, $q85, $q86, $q87, $q88, $q89, $q90);

        // 10     test input handler for test page 
} else if (isset($_POST["submit10"])) {

    $q91 = $_POST["q91"];
    $q92 = $_POST["q92"];
    $q93 = $_POST["q93"];
    $q94 = $_POST["q94"];
    $q95 = $_POST["q95"];
    $q96 = $_POST["q96"];
    $q97 = $_POST["q97"];
    $q98 = $_POST["q98"];
    $q99 = $_POST["q99"];
    $q100 = $_POST["q100"];


    require_once 'dbh.inc.php';
    require_once 'functions.test.inc.php';

    createTest10($conn, $userId, $q91, $q92, $q93, $q94, $q95, $q96, $q97, $q98, $q99, $q100);

} else {
    header("location: ../test_11.php?wattafaka");
    exit();
}

