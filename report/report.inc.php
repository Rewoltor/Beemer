<?php
session_start();
require_once 'dbh.inc.php';
$userId = $_SESSION['userId'];


    //1
    $sql1 = "SELECT t_openness FROM t_results WHERE userId='".$userId."'";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT t_conscientiousness FROM t_results WHERE userId='".$userId."'";
    $result2 = mysqli_query($conn, $sql2);

    $sql3 = "SELECT t_extroversion FROM t_results WHERE userId='".$userId."'";
    $result3 = mysqli_query($conn, $sql3);

    $sql4 = "SELECT t_agreeableness FROM t_results WHERE userId='".$userId."'";
    $result4 = mysqli_query($conn, $sql4);

    $sql5 = "SELECT t_neuroticism FROM t_results WHERE userId='".$userId."'";
    $result5 = mysqli_query($conn, $sql5);


    $sql = "SELECT * FROM t_results WHERE userId='".$userId."'";
    $result = mysqli_query($conn, $sql);


    //congnitive shall be added later to this section

      while ($row1 = mysqli_fetch_assoc($result1))
      {
        $o_rest = $row1['t_openness'];
      }
      while ($row2 = mysqli_fetch_assoc($result2))
      {
        $c_rest = $row2['t_conscientiousness'];
      }
      while ($row3 = mysqli_fetch_assoc($result3))
      {
        $e_rest = $row3['t_extroversion'];
      }
      while ($row4 = mysqli_fetch_assoc($result4))
      {
        $a_rest = $row4['t_agreeableness'];
      }
      while ($row5 = mysqli_fetch_assoc($result5))
      {
        $n_rest = $row5['t_neuroticism'];
      }
      while ($row = mysqli_fetch_assoc($result))
      {
        $cognitrive = $row['cognitrive'];
      }

      $times = 1.25;
      $openness = round($o_rest * $times, 0);

      $times = 1.25;
      $conscientiousness = round($c_rest * $times, 0);

      $times = 1.25;
      $extroversion = round($e_rest * $times, 0);

      $times = 1.25;
      $agreeableness = round($a_rest * $times, 0);

      $times = 1.25;
      $neuroticism = round($n_rest * $times, 0);



      /*
      $value = 4.96754;
      round($value, 2);
      //returns 4.97
      */