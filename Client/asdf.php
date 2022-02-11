<!DOCTYPE html>
<html lang="en">
<head>
    <title>Részletes eredmény</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="report.css"/>
</head>


<div class="header">
    <div class="div-nav-1">
        <p>Részletes személyiség elemzés</p>
    </div>

    <hr>

    <div class="div-nav-2">
        <p>Nagy Gábor</p>
    </div>
    
    <div class="div-nav-3">
        <span>
            <a class="button-2" href="d.php">Vissza</a>
        </span>
        <span>
            <p class="email">Nagy.Gábor@gmail.com</p>
        </span>

        <span>
            <form action="downloadsomethisdfléaskdjfaskdjféaksdjéfkasjdfsad">
                <button class="button-3" name="submit">Export</button>
            </form>
        </span>
    </div>
</div>


    <!-- gets the SCORE DATA from the php code bellow and displays it -->
            <?php

            // Fetch records from database
            include_once '../dbh.inc.php';
            $userId = $_GET["userId"];
            $result = $conn->query(
                "SELECT * FROM t_results WHERE userId = $userId;");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            ?>
            <div class="wrapper">
                <div class="box-1">Nyitottság</div>
                <div class="box-1">Lelkiiesmeret</div>
                <div class="box-1">Extroverzió</div>
                <div class="box-1">Simulékonyság</div>
                <div class="box-1">Stressz</div>
            <!--  data points from php  -->
                <div class="box-2"><?php echo $row['t_openness']; ?>/100</div>
                <div class="box-2"><?php echo $row['t_conscientiousness']; ?>/100</div>
                <div class="box-2"><?php echo $row['t_extroversion']; ?>/100</div>
                <div class="box-2"><?php echo $row['t_agreeableness']; ?>/100</div>
                <div class="box-2"><?php echo $row['t_neuroticism']; ?>/100</div>







            <?php } }else{ ?>
            <div class="box-1">Ilyen személy nincsen az adatbázisunkban</div>
            <?php } ?>




            
<?php
include_once '../dbh.inc.php';
$userId = $_GET["userId"];
$result = $conn->query(
    "SELECT * FROM test_text WHERE userId = $userId;");
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        if($row['t_openness']< 20){
            $o = "o_1";
        }else if($row['t_openness'] > 19 && $row['t_openness'] < 40){
            $o = "o_2";
        }else if($row['t_openness'] > 39 && $row['t_openness'] < 60){
            $o = "o_3";
        }else if($row['t_openness'] > 59 && $row['t_openness'] < 80){
            $o = "o_4";
        }else if($row['t_openness'] > 79){
            $o = "o_5";
        }

        else if($row['t_conscientiousness'] > 19 && $row['t_conscientiousness'] < 40){
            $o = "c_1";
        }else if($row['t_conscientiousness'] > 19 && $row['t_conscientiousness'] < 40){
            $o = "c_2";
        }else if($row['t_conscientiousness'] > 39 && $row['t_conscientiousness'] < 60){
            $o = "c_3";
        }else if($row['t_conscientiousness'] > 59 && $row['t_conscientiousness'] < 80){
            $o = "c_4";
        }else if($row['t_conscientiousness'] > 79){
            $o = "c_5";
        }

        else if($row['t_extroversion'] > 19 && $row['t_extroversion'] < 40){
            $o = "e_1";
        }else if($row['t_extroversion'] > 19 && $row['t_extroversion'] < 40){
            $o = "e_2";
        }else if($row['t_extroversion'] > 39 && $row['t_extroversion'] < 60){
            $o = "e_3";
        }else if($row['t_extroversion'] > 59 && $row['t_extroversion'] < 80){
            $o = "e_4";
        }else if($row['t_extroversion'] > 79){
            $o = "e_5";
        }

        else if($row['t_agreeableness'] > 19 && $row['t_agreeableness'] < 40){
            $o = "a_1";
        }else if($row['t_agreeableness'] > 19 && $row['t_agreeableness'] < 40){
            $o = "a_2";
        }else if($row['t_agreeableness'] > 39 && $row['t_agreeableness'] < 60){
            $o = "a_3";
        }else if($row['t_agreeableness'] > 59 && $row['t_agreeableness'] < 80){
            $o = "a_4";
        }else if($row['t_agreeableness'] > 79){
            $o = "a_5";
        }

        else if($row['t_neuroticism'] > 19 && $row['t_neuroticism'] < 40){
            $o = "n_1";
        }else if($row['t_neuroticism'] > 19 && $row['t_neuroticism'] < 40){
            $o = "n_2";
        }else if($row['t_neuroticism'] > 39 && $row['t_neuroticism'] < 60){
            $o = "n_3";
        }else if($row['t_neuroticism'] > 59 && $row['t_neuroticism'] < 80){
            $o = "n_4";
        }else if($row['t_neuroticism'] > 79){
            $o = "n_5";
        }
    }
?>
        <div class="box-3"><?php $o ?></div>
        <div class="box-3"><?php $c ?></div>
        <div class="box-3"><?php $e ?></div>
        <div class="box-3"><?php $a ?></div>
        <div class="box-3"><?php $n ?></div>

<?php } ?>