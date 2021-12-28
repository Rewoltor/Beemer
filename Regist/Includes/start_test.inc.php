<?php
session_start();

$registerId = $_SESSION['registerId'];

require_once '../../dbh.inc.php';

if(isset($_POST['submit100'])) { 

    $sql1 = "SELECT * FROM users WHERE registerId='".$registerId."'";
    echo $sql1;
    $result1 = mysqli_query($conn, $sql1);

    while ($row1 = mysqli_fetch_assoc($result1))
    {
        $userId = $row1['userId'];
        echo $row1['userId'];
        session_start();
        $_SESSION['userId'] = $row1['userId'];
        header ("location: ../../test/test_1.php"); //path after
        exit();
    }
}
else {
    header("location: ../register.php?wattafaka");
    exit();
}
