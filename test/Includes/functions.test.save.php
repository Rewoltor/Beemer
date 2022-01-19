<?php

// got to change this after adding the cognitive cathegory
function Result($conn, $userId, $o_rest, $c_rest, $e_rest, $a_rest, $n_rest, $co_rest, $clientsId) {
    $sql = "INSERT INTO t_results (userId, t_openness, t_conscientiousness, t_extroversion, t_agreeableness, t_neuroticism, cognitrive, clientsId) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../save_result.inc.php?error=stmtfailed11");
        exit();
    }
        
    //input to the database
    mysqli_stmt_bind_param($stmt, "ssssssss", $userId, $o_rest, $c_rest, $e_rest, $a_rest, $n_rest, $co_rest, $clientsId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../report/report.php"); //post register path
    exit();
}