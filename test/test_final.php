<?php
session_start();
    
if (isset($_SESSION['registerId'])) {
echo   '<html>
            <head>
                <meta charset="UTF-8">
                <title>Bejelentkezés</title>
                <meta name="description" content="Login - Register Template">
                <meta name="author" content="Lorenzo Angelino aka MrLolok">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="Js/test_final.css">
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
                        <i class="material-icons lock"></i> Sikeres teszt
                    </div>
            
            
                    
                    <img src="https://media3.giphy.com/media/VqQ1jA9vsJKPS/giphy.gif" style="max-width: 90%; margin-top: 15%; border-radius: 0.4em;" />
                    
            
                    
                    <form action="Includes/save_result.inc.php" method="post">
                        <div class="register-button">
                            <input type="submit" name="submit" value="Eredmény" class="inputButton" style="margin-top: 13%;"> 
                        </div>
                    </form>
                    
                </div>
            </body>
        </html>';
} else {
    echo   '<html>
                <head>
                    <meta charset="UTF-8">
                    <title>Bejelentkezés</title>
                    <meta name="description" content="Login - Register Template">
                    <meta name="author" content="Lorenzo Angelino aka MrLolok">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="Js/test_final.css">
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



                
