<?php

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
  $sql1 = "SELECT test1q5 FROM test1 WHERE userId='".$userId."'";
  $result1 = mysqli_query($conn, $sql1);
  $sql1_1 = "SELECT test1q10 FROM test1 WHERE userId='".$userId."'";
  $result1_1 = mysqli_query($conn, $sql1_1);

    while ($row1 = mysqli_fetch_assoc($result1))
    {
      $n_1 = $row1['test1q5'];
    }
    while ($row1_1 = mysqli_fetch_assoc($result1_1))
    {
      $n_2 = $row1_1['test1q10'];
    }

    //2
  $sql2 = "SELECT test1q15 FROM test2 WHERE userId='".$userId."'";
  $result2 = mysqli_query($conn, $sql2);
  $sql2_1 = "SELECT test1q20 FROM test2 WHERE userId='".$userId."'";
  $result2_1 = mysqli_query($conn, $sql2_1);
  
    while ($row2 = mysqli_fetch_assoc($result2))
    {
      $n_3 = $row2['test1q15'];
    }
    while ($row2_1 = mysqli_fetch_assoc($result2_1))
    {
      $n_4 = $row2_1['test1q20'];
    }

      //3
  $sql3 = "SELECT test1q25 FROM test3 WHERE userId='".$userId."'";
  $result3 = mysqli_query($conn, $sql3);
  $sql3_1 = "SELECT test1q30 FROM test3 WHERE userId='".$userId."'";
  $result3_1 = mysqli_query($conn, $sql3_1);
  
    while ($row3 = mysqli_fetch_assoc($result3))
    {
      $n_5 = $row3['test1q25'];
    }
    while ($row3_1 = mysqli_fetch_assoc($result3_1))
    {
      $n_6 = $row3_1['test1q30'];
    }

      //4
  $sql4 = "SELECT test1q35 FROM test4 WHERE userId='".$userId."'";
  $result4 = mysqli_query($conn, $sql4);
  $sql4_1 = "SELECT test1q40 FROM test4 WHERE userId='".$userId."'";
  $result4_1 = mysqli_query($conn, $sql4_1);
  
    while ($row4 = mysqli_fetch_assoc($result4))
    {
      $n_7 = $row4['test1q35'];
    }
    while ($row4_1 = mysqli_fetch_assoc($result4_1))
    {
      $n_8 = $row4_1['test1q40'];
    }

      //5
  $sql5 = "SELECT test1q45 FROM test5 WHERE userId='".$userId."'";
  $result5 = mysqli_query($conn, $sql5);
  $sql5_1 = "SELECT test1q50 FROM test5 WHERE userId='".$userId."'";
  $result5_1 = mysqli_query($conn, $sql5_1);
  
    while ($row5 = mysqli_fetch_assoc($result5))
    {
      $n_9 = $row5['test1q45'];
    }
    while ($row5_1 = mysqli_fetch_assoc($result5_1))
    {
      $n_10 = $row5_1['test1q50'];
    }

      //6
  $sql6 = "SELECT test1q55 FROM test6 WHERE userId='".$userId."'";
  $result6 = mysqli_query($conn, $sql6);
  $sql6_1 = "SELECT test1q60 FROM test6 WHERE userId='".$userId."'";
  $result6_1 = mysqli_query($conn, $sql6_1);
  
    while ($row6 = mysqli_fetch_assoc($result6))
    {
      $n_11 = $row6['test1q55'];
    }
    while ($row6_1 = mysqli_fetch_assoc($result6_1))
    {
      $n_12 = $row6_1['test1q60'];
    }

      //7
  $sql7 = "SELECT test1q65 FROM test7 WHERE userId='".$userId."'";
  $result7 = mysqli_query($conn, $sql7);
  $sql7_1 = "SELECT test1q70 FROM test7 WHERE userId='".$userId."'";
  $result7_1 = mysqli_query($conn, $sql7_1);
  
    while ($row7 = mysqli_fetch_assoc($result7))
    {
      $n_13 = $row7['test1q65'];
    }
    while ($row7_1 = mysqli_fetch_assoc($result7_1))
    {
      $n_14 = $row7_1['test1q70'];
    }

      //8
  $sql8 = "SELECT test1q75 FROM test8 WHERE userId='".$userId."'";
  $result8 = mysqli_query($conn, $sql8);
  $sql8_1 = "SELECT test1q80 FROM test8 WHERE userId='".$userId."'";
  $result8_1 = mysqli_query($conn, $sql8_1);
  
    while ($row8 = mysqli_fetch_assoc($result8))
    {
      $n_15 = $row8['test1q75'];
    }
    while ($row8_1 = mysqli_fetch_assoc($result8_1))
    {
      $n_16 = $row8_1['test1q80'];
    }

      //9
  $sql9 = "SELECT test1q85 FROM test9 WHERE userId='".$userId."'";
  $result9 = mysqli_query($conn, $sql9);
  $sql9_1 = "SELECT test1q90 FROM test9 WHERE userId='".$userId."'";
  $result9_1 = mysqli_query($conn, $sql9_1);
  
    while ($row9 = mysqli_fetch_assoc($result9))
    {
      $n_17 = $row9['test1q85'];
    }
    while ($row9_1 = mysqli_fetch_assoc($result9_1))
    {
      $n_18 = $row9_1['test1q90'];
    }

      //10
  $sql10 = "SELECT test1q95 FROM test10 WHERE userId='".$userId."'";
  $result10 = mysqli_query($conn, $sql10);
  $sql10_1 = "SELECT test1q100 FROM test10 WHERE userId='".$userId."'";
  $result10_1 = mysqli_query($conn, $sql10_1);
  
    while ($row10 = mysqli_fetch_assoc($result10))
    {
      $n_19 = $row10['test1q95'];
    }
    while ($row10_1 = mysqli_fetch_assoc($result10_1))
    {
      $n_20 = $row10_1['test1q100'];
    }

$addition = 28;
$o_rest = $n_2 + $n_1 - $n_3 + $n_4 + $n_5 + $n_6 + $n_7 + $n_8 - $n_9 - $n_10 - $n_11 - $n_12 + $n_13 + $n_14 + $n_15 - $n_16 - $n_17 - $n_18 + $n_19 + $n_20 + $addition;

$o = 14;
$openness = $n_2 + $n_4 + $n_6 + $n_8 - $n_10 - $n_12 + $n_14 - $n_16 - $n_18 + $n_20 + $o;


$i = 14;
$intellect = $n_1 - $n_3 + $n_5 + $n_7 - $n_9 - $n_11 + $n_13 + $n_15 - $n_17 + $n_19 + $i;

