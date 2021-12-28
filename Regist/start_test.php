<?php
session_start();
/*
      if (isset($_SESSION['registerId'])) {
          echo "Cool";
          echo $_SESSION['registerId'];
      } else {
           echo "Not cool";
      }
*/

?>

<?php
    
if (isset($_SESSION['registerId'])) {
    echo   
    '<html>
        <head>
            <meta charset="UTF-8">
            <title>Bejelentkezés</title>
            <meta name="description" content="Login - Register Template">
            <meta name="author" content="Lorenzo Angelino aka MrLolok">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="dist/start_test.css">
            <script src="dist/remember.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <style>
                body {
                    background-color: #303641;
                }
            </style>
        </head>
        
        <body>
            <div id="container-login">
                <div id="title">
                    <i class="material-icons lock"></i>
            </div>

            <form action="Includes/start_test.inc.php" method="post">
                    <div class="register" style="margin-top: 20%; color:#787774">
                        <p>Válaszoljon őszintén a kérdésekre</p>
                        <p>Nincsenek jó vagy válaszok</p>
                        <p>5-ős skálán tud válaszolni majd a kérdésekre, hogy mennyire igazak önre</p>
                        <input type="submit" name="submit100" class="inputButton" id="submit" value="Irány a Teszt"> <!-- a "name" számít a .php-nál   -->
                    </div>
            </form>
            
        </body>

    </html>';
} else {
    echo    
    '<html>
        <head>
            <meta charset="UTF-8">
            <title>Bejelentkezés</title>
            <meta name="description" content="Login - Register Template">
            <meta name="author" content="Lorenzo Angelino aka MrLolok">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="dist/start_test.css">
            <script src="dist/remember.js"></script>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <style>
                body {
                    background-color: #303641;
                }
            </style>
        </head>
        
        <body>
            <div id="container-login">
                <div id="title">
                <i class="material-icons lock"></i> Sajnos még nincsen bejelentkezve
            </div>
            
            <form action="login.php" method="post">
                <div class="register-button">
                    <input type="submit" name="submit" value="Bejelentkezés" class="inputButton" style="margin-top: 13%;"> 
                </div>
            </form>
            
            <form action="register.php" method="post">
                <div class="register-button">
                    <input type="submit" name="submit" value="Regisztráció" class="inputButton" style="margin-top: 13%;"> 
                </div>
            </form>
        </body>';
    }



if(isset($_POST['submit100'])) { 

    $sql1 = "SELECT userId FROM users WHERE registerId='".$registerId."'";
    $result1 = mysqli_query($conn, $sql1);

    while ($row1 = mysqli_fetch_assoc($result1))
    {
        $userId = $row1['userId'];
        session_start();
        $_SESSION['userId'] = $userId['userId'];
        header ("location: ../../test/test_1.php"); //path after
        exit();
    }

}
