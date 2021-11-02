<?php


include_once "intent.php";



$userId = $_SESSION['userId'];

//effort to make the code shorter and more readable
$sql1 = "SELECT * FROM test1 WHERE userId='".$userId."'";
$result1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM test2 WHERE userId='".$userId."'";
$result2 = mysqli_query($conn, $sql2);

$sql3 = "SELECT * FROM test3 WHERE userId='".$userId."'";
$result3 = mysqli_query($conn, $sql3);

$sql4 = "SELECT * FROM test4 WHERE userId='".$userId."'";
$result4 = mysqli_query($conn, $sql4);

$sql5 = "SELECT * FROM test5 WHERE userId='".$userId."'";
$result5 = mysqli_query($conn, $sql5);

$sql6 = "SELECT * FROM test6 WHERE userId='".$userId."'";
$result6 = mysqli_query($conn, $sql6);

$sql7 = "SELECT * FROM test7 WHERE userId='".$userId."'";
$result7 = mysqli_query($conn, $sql7);

$sql8 = "SELECT * FROM test8 WHERE userId='".$userId."'";
$result8 = mysqli_query($conn, $sql8);

$sql9 = "SELECT * FROM test9 WHERE userId='".$userId."'";
$result9 = mysqli_query($conn, $sql9);

$sql10 = "SELECT * FROM test10 WHERE userId='".$userId."'";
$result10 = mysqli_query($conn, $sql10);

  while ($row1 = mysqli_fetch_assoc($result1))
  {
    $n_1 = $row1['test1q4'];
  }
  while ($row2 = mysqli_fetch_assoc($result2))
  { 
    $n_2 = $row2['test2q9'];
    echo $n_2;
  }

?>










  <?php
  include_once '../database.php';
  $result = mysqli_query($conn, "SELECT * FROM test11 WHERE userId='".$userId."'");

  if (mysqli_num_rows($result) > 0) {

  $i=0;
  while($row = mysqli_fetch_array($result)) {

  $i++;
  }
  ?>
  </table>
   <?php
  }
  else{
      echo "No result found";
  }
  ?>