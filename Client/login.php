<html>

<head>
    <meta charset="UTF-8">
    <title>Bejelentkezés</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/login.css">
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
            <i class="material-icons lock">lock</i> Bejelentkezés
        </div>


        <form action="Includes/login.inc.php" method="post">

            <?php include 'includes/error.php';?>
        
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input placeholder="Email" type="text" name="email" data-validation="email" data-validation-error-msg-container="#ErrorEmail" required class="validate">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="pwd" type="password" required class="validate">
            </div>

            <div class="remember-me">
                <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Emlékezz rám</label>
            </div>

            <input type="submit" name="submit" value="Bejelentkezés" />


        </form>

        <div class="forgot-password">
            <a href="#">Eléfelejtett jelszó?</a>
        </div>
        <div class="privacy">
            <a href="C:\Users\balta\Documents\Program\Html\Test\1_test.html">Adatvédelmi nyilatkozat</a>
        </div>

        <div class="register">
            Nem regisztrált még?
            <a href="register.php"><button id="register-link">Regisztáljon itt</button></a>
        </div>
    </div>
</body>

</html>
