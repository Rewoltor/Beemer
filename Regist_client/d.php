<!-- Export link -->
<?php
session_start();
?>
<div class="col-md-12 head">
    <div class="float-right">
        <a href="Includes/download.inc.php" class="btn btn-success"><i class="dwn"></i> Export</a>
    </div>
</div>

<!-- Data list table --> 
<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Country</th>
            <th>Created</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
   <?php 
include_once '../dbh.inc.php';
$clientsId = $_SESSION["clientsId"];
    // Fetch records from database 
    $result = $conn->query(
        "SELECT *
        FROM users u
        RIGHT JOIN t_results t
            ON u.userId = t.userId
        WHERE u.clientsId = $clientsId;
         "); 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
    ?>
        <tr>
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