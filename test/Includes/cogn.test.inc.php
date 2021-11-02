<?php
session_start();


//this file is the same as test.inc.php  but for simplicity I am adding it here.
//whern th project is ready add the nececarry code to the test.inc.php  and modify the reference in functions.test.php
//most of the code here is not nececcary as the 'submit11' command is the only one being used for now

// 1     test input handler for test page 
if (isset($_POST["submit1.1"])) {

    $userId = $_SESSION['userId'];
    $q1 = $_POST["co1"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn1($conn, $userId, $co1);


    // 2     test input handler for test page 
} else if (isset($_POST["submit1.2"])) {

    $userId = $_SESSION['userId'];
    $q12 = $_POST["co2"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn2($conn, $userId, $co11);

    // 3     test input handler for test page 
} else if (isset($_POST["submit1.3"])) {

    $userId = $_SESSION['userId'];
    $q21 = $_POST["co3"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn3($conn, $userId, $co3);

        // 4     test input handler for test page 
} else if (isset($_POST["submit1.4"])) {

    $userId = $_SESSION['userId'];
    $q31 = $_POST["co4"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn4($conn, $userId, $co4);

        // 5     test input handler for test page 
} else if (isset($_POST["submit1.5"])) {

    $userId = $_SESSION['userId'];
    $q41 = $_POST["co5"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn5($conn, $userId, $co5);

        // 6     test input handler for test page
} else if (isset($_POST["submit1.6"])) {

    $userId = $_SESSION['userId'];
    $q51 = $_POST["co6"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn6($conn, $userId, $co6);

        // 7     test input handler for test page 
} else if (isset($_POST["submit1.7"])) {

    $userId = $_SESSION['userId'];
    $q61 = $_POST["co7"];;


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn7($conn, $userId, $co7);

        // 8     test input handler for test page 
} else if (isset($_POST["submit1.8"])) {

    $userId = $_SESSION['userId'];
    $q71 = $_POST["co8"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn8($conn, $userId, $co8);

        // 9     test input handler for test page 
} else if (isset($_POST["submit1.9"])) {

    $userId = $_SESSION['userId'];
    $q81 = $_POST["co9"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn9($conn, $userId, $co9);

        // 10     test input handler for test page 
} else if (isset($_POST["submit1.10"])) {

    $userId = $_SESSION['userId'];
    $q91 = $_POST["co10"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.inc.php';

    createTestCogn10($conn, $userId, $co10);

} else if (isset($_POST["submit11"])) {

    $userId = $_SESSION['userId'];
    $co1 = $_POST["co1"];
    $co2 = $_POST["co2"];
    $co3 = $_POST["co3"];
    $co4 = $_POST["co4"];
    $co5 = $_POST["co5"];
    $co6 = $_POST["co6"];
    $co7 = $_POST["co7"];
    $co8 = $_POST["co8"];
    $co9 = $_POST["co9"];
    $co10 = $_POST["co10"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.php';

    createTestCogn($conn, $userId, $co1, $co2, $co3, $co4, $co5, $co6, $co7, $co8, $co9, $co10);

} else if (isset($_POST["submit111"])) {

    $userId = $_SESSION['userId'];
    $co10 = $_POST["co10"];


    require_once 'dbh.inc.php';
    require_once 'cogn.functions.test.php';

    createTestCogn1($conn, $userId, $co10);

} else {
    header("location: ../test_10.php?wattafaka");
    exit();
}
