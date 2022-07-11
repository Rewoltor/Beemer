<?php

//this page calculates the score of the cognitive test

$userId = $_SESSION['userId'];

if (isset($_SESSION['userId'])) {
echo "Cool";
echo $userId;
} else {
echo "Not cool";
}


//get information from database
  $sql = "SELECT * FROM test11 WHERE userId='".$userId."'";
  $result = mysqli_query($conn, $sql);


//calculates the correct answer
while ($row = mysqli_fetch_assoc($result))
{
  //1
  //gets data and sorts it witha a if statement into correct "1" and incorrect "0"
    $co_1 = $row['co1'];
    if($co_1 == "a"){
        $co_a_1 = "1";
    }else{
        $co_a_1 = "0";
    }
    //2
    $co_2 = $row['co2'];
    if($co_2 == "d"){
        $co_a_2 = "1";
    }else{
        $co_a_2 = "0";
    }
      //3
    $co_3 = $row['co3'];
    if($co_3 == "d"){
        $co_a_3 = "1";
    }else{
        $co_a_3 = "0";
    }
    //4
    $co_4 = $row['co4'];
    if($co_4 == "a"){
        $co_a_4 = "1";
    }else{
        $co_a_4 = "0";
    }
    //5
    $co_5 = $row['co5'];
    if($co_5 == "b"){
        $co_a_5 = "1";
    }else{
        $co_a_5 = "0";
    }
    //6
    $co_6 = $row['co6'];
    if($co_6 == "b"){
        $co_a_6 = "1";
    }else{
        $co_a_6 = "0";
    }
    //7
    $co_7 = $row['co7'];
    if($co_7 == "d"){
        $co_a_7 = "1";
    }else{
        $co_a_7 = "0";
    }
    //8
    $co_8 = $row['co8'];
    if($co_8 == "c"){
        $co_a_8 = "1";
    }else{
        $co_a_8 = "0";
    }
    //9
    $co_9 = $row['co9'];
    if($co_9 == "c"){
        $co_a_9 = "1";
    }else{
        $co_a_9 = "0";
    }
    //10
    $co_10 = $row['co10'];
    if($co_10 == "g"){
        $co_a_10 = "1";
    }else{
        $co_a_10 = "0";
    }
}




//with a simple addition it calculates a score from 1 to 10
// this method should be imporved as it only gives a very rouhgt guess of one cognitive capacity
$co_rest = $co_a_1 + $co_a_2 + $co_a_3 + $co_a_4 + $co_a_5 + $co_a_6 + $co_a_7 + $co_a_8 + $co_a_9 + $co_a_10;
