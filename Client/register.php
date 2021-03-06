<html>

<head>
    <meta charset="UTF-8">
    <title>Regisztráció</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/register.css">
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
    <div id="container-register-client">
        <div id="title">
            <i class="material-icons lock">lock</i> Regisztráció
        </div>


        <!-- error handler php input -->
        <?php include 'includes/error.php';?>

        <form action="Includes/signup.inc.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" name="email" data-validation="email" data-validation-error-msg-container="#ErrorEmail" required class="validate">
            </div>

            <div class="clearfix"></div>

            <!-- egymás melletti szövegdobozok a beírásra -->
            <div class="input">
                <div class="input-field"><div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="vez_nev" placeholder="Cég neve" name="vez_nev" type="text" required class="validate">
                </div>
            </div>        

            <div id="input-addon" class="input">
                <div class="input-addon">
                    <img src="dist/phone_number.jpg" class="img"> 
                </div>
                <input placeholder="Telefonszám" type="tel" name="phone_number" id="phone_number" required="required">
            </div>

            <!-- don't know what da fukk is this -->
            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Jelszó" name="pwd" type="password" required class="validate" autocomplete="off" onkeyup='check();'>
            </div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="confirm_password" placeholder="Jelszó megerősítés" name="pwdrepeat" type="password" required class="validate" autocomplete="off" onkeyup='check();'>
            </div>

            <span id='message' class= "message"></span>

<!--
            <div class="remember-me">
                <input type="checkbox" id="checkme"/>
                <span style="color: #DDD">Elfogadom a <a href="https://www.google.com/">feltételeket</a></span>
            <script LANGUAGE="JavaScript" src="dist/box.js"></script>  
            </div>
    -->
            <div class="remember-me">
                <input type="checkbox" id="checkme"/>
                <span style="color: #DDD">Elfogadom a <a href="https://www.google.com/">feltételeket</a></span>
            <script LANGUAGE="JavaScript" src="dist/box.js"></script>  
            </div>


            <div class="register-button">
                <input type="submit" name="submit" class="inputButton"  id="submit" value="Regisztráció" disabled="disabled"  /> <!-- a "name" számít a .php-nál   -->
            <script LANGUAGE="JavaScript" src="dist/box.js"></script> <!-- .js for, if box is not checked not clickable -->
            </div>



        </form>

        <div class="register">
            <p>Már van fiókja?</p>
            <a href="login.php"><button id="register-link">Jelentkezzen be</button></a>
        </div>
    </div>
</body>


</html>