<?php

require_once '../../../dbh.inc.php';

$userId = $_SESSION['userId'];
/*
if (isset($_SESSION['userId'])) {
  echo "Cool";
} else {
   echo "Not cool";
}
*/


//withdrawal

    //1
  $sql1 = "SELECT test1q1 FROM test1 WHERE userId='".$userId."'";
  $result1 = mysqli_query($conn, $sql1);
  $sql1_1 = "SELECT test1q6 FROM test1 WHERE userId='".$userId."'";
  $result1_1 = mysqli_query($conn, $sql1_1);

    while ($row1 = mysqli_fetch_assoc($result1))
    {
      $n_1 = $row1['test1q1'];
    }
    while ($row1_1 = mysqli_fetch_assoc($result1_1))
    {
      $n_2 = $row1_1['test1q6'];
    }

    //2
  $sql2 = "SELECT test1q11 FROM test2 WHERE userId='".$userId."'";
  $result2 = mysqli_query($conn, $sql2);
  $sql2_1 = "SELECT test1q16 FROM test2 WHERE userId='".$userId."'";
  $result2_1 = mysqli_query($conn, $sql2_1);
  
    while ($row2 = mysqli_fetch_assoc($result2))
    {
      $n_3 = $row2['test1q11'];
    }
    while ($row2_1 = mysqli_fetch_assoc($result2_1))
    {
      $n_4 = $row2_1['test1q16'];
    }

      //3
  $sql3 = "SELECT test1q21 FROM test3 WHERE userId='".$userId."'";
  $result3 = mysqli_query($conn, $sql3);
  $sql3_1 = "SELECT test1q26 FROM test3 WHERE userId='".$userId."'";
  $result3_1 = mysqli_query($conn, $sql3_1);
  
    while ($row3 = mysqli_fetch_assoc($result3))
    {
      $n_5 = $row3['test1q21'];
    }
    while ($row3_1 = mysqli_fetch_assoc($result3_1))
    {
      $n_6 = $row3_1['test1q26'];
    }

      //4
  $sql4 = "SELECT test1q31 FROM test4 WHERE userId='".$userId."'";
  $result4 = mysqli_query($conn, $sql4);
  $sql4_1 = "SELECT test1q36 FROM test4 WHERE userId='".$userId."'";
  $result4_1 = mysqli_query($conn, $sql4_1);
  
    while ($row4 = mysqli_fetch_assoc($result4))
    {
      $n_7 = $row4['test1q31'];
    }
    while ($row4_1 = mysqli_fetch_assoc($result4_1))
    {
      $n_8 = $row4_1['test1q36'];
    }

      //5
  $sql5 = "SELECT test1q41 FROM test5 WHERE userId='".$userId."'";
  $result5 = mysqli_query($conn, $sql5);
  $sql5_1 = "SELECT test1q46 FROM test5 WHERE userId='".$userId."'";
  $result5_1 = mysqli_query($conn, $sql5_1);
  
    while ($row5 = mysqli_fetch_assoc($result5))
    {
      $n_9 = $row5['test1q41'];
    }
    while ($row5_1 = mysqli_fetch_assoc($result5_1))
    {
      $n_10 = $row5_1['test1q46'];
    }

      //6
  $sql6 = "SELECT test1q51 FROM test6 WHERE userId='".$userId."'";
  $result6 = mysqli_query($conn, $sql6);
  $sql6_1 = "SELECT test1q56 FROM test6 WHERE userId='".$userId."'";
  $result6_1 = mysqli_query($conn, $sql6_1);
  
    while ($row6 = mysqli_fetch_assoc($result6))
    {
      $n_11 = $row6['test1q51'];
    }
    while ($row6_1 = mysqli_fetch_assoc($result6_1))
    {
      $n_12 = $row6_1['test1q56'];
    }

      //7
  $sql7 = "SELECT test1q61 FROM test7 WHERE userId='".$userId."'";
  $result7 = mysqli_query($conn, $sql7);
  $sql7_1 = "SELECT test1q66 FROM test7 WHERE userId='".$userId."'";
  $result7_1 = mysqli_query($conn, $sql7_1);
  
    while ($row7 = mysqli_fetch_assoc($result7))
    {
      $n_13 = $row7['test1q61'];
    }
    while ($row7_1 = mysqli_fetch_assoc($result7_1))
    {
      $n_14 = $row7_1['test1q66'];
    }

      //8
  $sql8 = "SELECT test1q71 FROM test8 WHERE userId='".$userId."'";
  $result8 = mysqli_query($conn, $sql8);
  $sql8_1 = "SELECT test1q76 FROM test8 WHERE userId='".$userId."'";
  $result8_1 = mysqli_query($conn, $sql8_1);
  
    while ($row8 = mysqli_fetch_assoc($result8))
    {
      $n_15 = $row8['test1q71'];
    }
    while ($row8_1 = mysqli_fetch_assoc($result8_1))
    {
      $n_16 = $row8_1['test1q76'];
    }

      //9
  $sql9 = "SELECT test1q81 FROM test9 WHERE userId='".$userId."'";
  $result9 = mysqli_query($conn, $sql9);
  $sql9_1 = "SELECT test1q86 FROM test9 WHERE userId='".$userId."'";
  $result9_1 = mysqli_query($conn, $sql9_1);
  
    while ($row9 = mysqli_fetch_assoc($result9))
    {
      $n_17 = $row9['test1q81'];
    }
    while ($row9_1 = mysqli_fetch_assoc($result9_1))
    {
      $n_18 = $row9_1['test1q86'];
    }

      //10
  $sql10 = "SELECT test1q91 FROM test10 WHERE userId='".$userId."'";
  $result10 = mysqli_query($conn, $sql10);
  $sql10_1 = "SELECT test1q96 FROM test10 WHERE userId='".$userId."'";
  $result10_1 = mysqli_query($conn, $sql10_1);
  
    while ($row10 = mysqli_fetch_assoc($result10))
    {
      $n_19 = $row10['test1q91'];
    }
    while ($row10_1 = mysqli_fetch_assoc($result10_1))
    {
      $n_20 = $row10_1['test1q96'];
    }


$rest = $n_2 - $n_1 + $n_3 - $n_4 + $n_5 - $n_6 + $n_7 - $n_8 + $n_9 - $n_10 + $n_11 - $n_12 + $n_13 - $n_14 + $n_15 - $n_16 + $n_17 - $n_18 + $n_19 - $n_20;
