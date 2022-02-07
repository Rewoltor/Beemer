<html>
<?php

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
                <p>Teszt kérdések kiküldése</p>
                <a href="email.php"><button id="register-link">Teszt küldése</button></a>
            </div>


            <div class="register">
                <p>Teszteredmények letöltése</p>
                <a href="download.php"><button id="register-link">Eredmények letöltése</button></a>
            </div>

            <div class="register">
                <p></p>
                <a href="Includes/logout.inc.php"><button id="register-link">Kijelentkezés</button></a>
            </div>

    </div>
</body>
</html>
