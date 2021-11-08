<?php
    session_start();
    
        if (isset($_SESSION['usersEmail'])) {
            echo   '<html>
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
                                    <i class="material-icons lock"></i> Sikeres regisztráció
                            </div>

                            <div class="register" style="margin-top: 40%;">
                                <p></p>
                                <a href="../../test/test_1.php"><button id="register-link">Teszt Kitöltése</button></a>
                            </div>
                        </body>

                    </html>';
        } else {
            echo    '<html>
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



                