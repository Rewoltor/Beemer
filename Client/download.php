<?php
session_start();
include_once '../dbh.inc.php';
$clientsId = $_SESSION["clientsId"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Eredmények</title>
    
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="dist/bootstrap/bootstrap.min.css">
    
    <!-- Stylesheet file --> 
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>
<div class="container">
    <h2>Eredmények</h2>

    <div class="row">
        <!-- Export link -->
        <div class="col-md-12 head">
            <div class="float-left">
                <a href="client_page.php" class="btn btn-success"><i class="dwn"></i> Vissza</a>
            </div>
            <div class="float-right">
                <a href="Includes/download.inc.php" class="btn btn-success"><i class="dwn"></i> Export</a>
            </div>
        </div>

        <!-- Data list table --> 
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Azonosító</th>
                    <th>Név</th>
                    <th>Kitöltés ideje</th>
                    <th>Email</th>
                    <th>Nyitottság</th>
                    <th>Szorgalom</th>
                    <th>Extroverzió</th>
                    <th>Barátságosság</th>
                    <th>Stressz</th>
                    <th>Kognitív</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // Fetch records from database
            include_once '../dbh.inc.php';
            $result = $conn->query(
                "SELECT *
                FROM users u
                RIGHT JOIN t_results t
                    ON u.userId = t.userId
                WHERE u.clientsId = $clientsId;"
                );
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            ?>
            <!--  data points from php  -->
            <tr>
                <td><?php  echo '<a href="big_report.php?id='.$row['userId'].'">Elemzés</a>';  ?></td>   <!--  takes users to specific personality accessment page  -->
                <td><?php echo $row['usersVez_nev']; ?></td>
                <td><?php echo $row['registerTime']; ?></td>
                <td><?php echo $row['usersEmail']; ?></td>
                <td><?php echo $row['t_openness']; ?></td>
                <td><?php echo $row['t_conscientiousness']; ?></td>
                <td><?php echo $row['t_extroversion']; ?></td>
                <td><?php echo $row['t_agreeableness']; ?></td>
                <td><?php echo $row['t_neuroticism']; ?></td>
                <td><?php echo $row['cognitrive']; ?></td>
            </tr>

            <?php } }else{ ?>
                <tr><td colspan="7">No member(s) found...</td></tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>