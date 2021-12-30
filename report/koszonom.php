<?php
session_start();

if (isset($_SESSION['registerId'])) {
    echo "Cool";
    echo $_SESSION['registerId'];
} else {
     echo "Not cool";
}

?>


<html>

<head>
    <meta charset="UTF-8">
    <title>Első lépés</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="email_validate.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="dist/the-datepicker.css">
    <script src="dist/password_validate.js"></script> 
    <script src="dist/the-datepicker.js"></script>  <!-- date selector -->
    <script src="dist/box.js"></script> <!-- is box checked .js -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="dist/style.css">
    <style>

        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
            <i class="material-icons lock">lock</i>Elemzés kérése
        </div>

        <form action="Includes/signup.inc.php" method="post">

            <div class="clearfix"></div>

            <!-- egymás melletti szövegdobozok a beírásra -->
            <div class="input">
                <div class="input-field"><div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                    <input id="email" placeholder="Email" name="email" type="email" required class="validate">
                </div>
            </div>
            
            <div class="input">
                <div class="input-field"><div class="input-addon">
                    <i class="material-icons">chat</i>
                </div>
                    <textarea rows="4" id="feedback" placeholder="Visszajelzés" name="feedback" type="text"></textarea>
                </div>
            </div> 



            <div class="register-button">
                <input type="submit" name="submit" class="inputButton" id="submit" value="Lead" /> <!-- a "name" számít a .php-nál   -->
            </div>

        </form>

    </div>
</body>




</html>