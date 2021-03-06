<html>
<?php
/*
if (isset($_SESSION['clientsId'])) {
          echo "Cool";
          echo $_SESSION['clientsId'];
      } else {
           echo "Not cool";
      }
*/
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
            <i class="material-icons lock">lock</i>Teszt kiküldése
        </div>


        <!-- error handler php input -->
        <?php include 'Includes/error.php';?>

            <form action="Includes/mailer.inc.php" method="post">
                <div class="input">
                    <div class="input-field"><div class="input-addon">
                        <i class="material-icons">email</i>
                    </div>
                        <input id="email" placeholder="Email" name="email" type="text" required class="validate">
                    </div>
                </div> 
                

                <div class="input">
                    <div class="input-field"><div class="input-addon">
                        <i class="material-icons">chat</i>
                    </div>
                        <input id="subject" placeholder="Tárgy" name="subject" type="text" required class="validate">
                    </div>
                </div>

                <div class="input">
                    <div class="input-field"><div class="input-addon">
                        <i class="material-icons">chat</i>
                    </div>
                        <textarea rows="4" id="content" placeholder="Üzenet" name="content" type="text"></textarea>
                    </div>
                </div> 


                <div class="button" style="margin-top: 5%;">
                    <input type="submit" name="submit" class="inputButton"  id="submit" value="Email küldése" /> <!-- a "name" számít a .php-nál   -->
                    <script LANGUAGE="JavaScript" src="dist/box.js"></script> <!-- .js for, if box is not checked not clickable -->
                </div>


            </form>    


            <div class="register">
                <p></p>
                <a href="client_page.php"><button id="register-link">Menü</button></a>
            </div>


    </div>
</body>
</html>
