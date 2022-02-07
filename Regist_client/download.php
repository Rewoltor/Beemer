<html>
<?php

session_start();
if (isset($_SESSION['clientsId'])) {
          echo "Coola";
          echo $_SESSION['clientsId'];
      } else {
           echo "Not cool1";
      }

?>
<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/register.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="dist/password_validate.js"></script> 
    <script src="dist/the-datepicker.js"></script>  <!-- date selector -->
    <script src="dist/box.js"></script> <!-- is box checked .js -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <style>

        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        
        <div id="title">
            <i class="material-icons lock">lock</i>Menü
        </div>



            <div class="register">
                <p>Teszteredmények letöltése</p>
                <a href="Includes/download.inc.php"><button id="register-link">Eredmények letöltése</button></a>
            </div>








<!-- Export link -->
<div class="col-md-12 head">
    <div class="float-right">
        <a href="exportData.php" class="btn btn-success"><i class="dwn"></i> Export</a>
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
    // Fetch records from database 
    $clientsId = $_SESSION["clientsId"];
    $result = $conn->query("SELECT *
                            FROM users u
                            RIGHT JOIN t_results t
                                ON u.userId = t.userId
                            WHERE u.clientsId = $clientsId"); 
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









            <div class="register">
                <p></p>
                <a href="client_page.php"><button id="register-link">Menü</button></a>
            </div>



    </div>
</body>
</html>
