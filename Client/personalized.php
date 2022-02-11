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


                <div class="box-3">K</div>
                <div class="box-3">L</div>
                <div class="box-3">M</div>
                <div class="box-3">N</div>
                <div class="box-3">O</div>




            <?php } }else{ ?>
            <div class="box-1">Ilyen személy nincsen az adatbázisunkban</div>
            <?php } ?>




            
            <?php  //pulls data for PERSONALITY DESCRIPTION and echo s it

            /*
            // Fetch records from database
            include_once '../dbh.inc.php';
            $userId = $_GET["userId"];
            $result = $conn->query(
                "SELECT * FROM test_text");
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            ?>
<!--
                <div class="box-3">K</div>
                <div class="box-3">L</div>
                <div class="box-3">M</div>
                <div class="box-3">N</div>
                <div class="box-3">O</div>
            </div>
                -->
            <?php } }else{ ?>
            <div class="box-1"></div>

*/



