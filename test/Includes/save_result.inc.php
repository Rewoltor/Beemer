<?php

session_start();
$userId = $_SESSION['userId'];

if (isset($_POST["submit"])) {

    require_once '../../dbh.inc.php';
    require_once 'calc/o.calc.inc.php';
    require_once 'calc/c.calc.inc.php';
    require_once 'calc/e.calc.inc.php';
    require_once 'calc/a.calc.inc.php';
    require_once 'calc/n.calc.inc.php';
    require_once 'calc/co.calc.inc.php';
    require_once 'functions.test.save.php';

    Result($conn, $userId, $o_rest, $c_rest, $e_rest, $a_rest, $n_rest, $co_rest);

} else {
    header("location: ../sikeres_test.php?wattafaka");
    exit();
}
