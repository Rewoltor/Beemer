<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Website Feedback Form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="Js/test.css">
    <script src="js/boxes.js"></script> <!-- are boxes checked .js -->
  </head>

<main>
  <?php
      if (isset($_SESSION['userId'])) {
          echo "Cool";
      } else {
           echo "Not cool";
      }
    ?>
</main>

  <body>



    <form action="Includes/test.inc.php" method="post">

        <p class="question">Kérem válaszoljon a kérdésekre legobb tudása szerint. Nincsenek jó vagy rossz válaszok.</p>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Egyáltalán nem</th>
            <th>Nem nagyon</th>
            <th>Közönbös</th>
            <th>Kicsit</th>
            <th>Nagyon</th>
          </tr>


            <tr>
                <td class="first-col">Gyakran izgulok
                    <td><input type="radio" name="q51" value="1" id="q51"></td>
                    <td><input type="radio" name="q51" value="2" id="q51"></td>
                    <td><input type="radio" name="q51" value="3" id="q51"></td>
                    <td><input type="radio" name="q51" value="4" id="q51"></td>
                    <td><input type="radio" name="q51" value="5" id="q51"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezen helyezem bele magamat mások helyzetébe
                    <td><input type="radio" name="q52" value="1" id="q52"></td>
                    <td><input type="radio" name="q52" value="2" id="q52"></td>
                    <td><input type="radio" name="q52" value="3" id="q52"></td>
                    <td><input type="radio" name="q52" value="4" id="q52"></td>
                    <td><input type="radio" name="q52" value="5" id="q52"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezen koncentrálok a feladatra amit éppen végzek
                    <td><input type="radio" name="q53" value="1" id="q53"></td>
                    <td><input type="radio" name="q53" value="2" id="q53"></td>
                    <td><input type="radio" name="q53" value="3" id="q53"></td>
                    <td><input type="radio" name="q53" value="4" id="q53"></td>
                    <td><input type="radio" name="q53" value="5" id="q53"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán robbanok szét az izgalomtól
                    <td><input type="radio" name="q54" value="1" id="q54"></td>
                    <td><input type="radio" name="q54" value="2" id="q54"></td>
                    <td><input type="radio" name="q54" value="3" id="q54"></td>
                    <td><input type="radio" name="q54" value="4" id="q54"></td>
                    <td><input type="radio" name="q54" value="5" id="q54"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem szeretek nehéz olvasmányokat olvasni
                    <td><input type="radio" name="q55" value="1" id="q55"></td>
                    <td><input type="radio" name="q55" value="2" id="q55"></td>
                    <td><input type="radio" name="q55" value="3" id="q55"></td>
                    <td><input type="radio" name="q55" value="4" id="q55"></td>
                    <td><input type="radio" name="q55" value="5" id="q55"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán vesztem el a nyugalmamat
                    <td><input type="radio" name="q56" value="1" id="q56"></td>
                    <td><input type="radio" name="q56" value="2" id="q56"></td>
                    <td><input type="radio" name="q56" value="3" id="q56"></td>
                    <td><input type="radio" name="q56" value="4" id="q56"></td>
                    <td><input type="radio" name="q56" value="5" id="q56"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán helyezek másokat nyomás alá
                    <td><input type="radio" name="q57" value="1" id="q57"></td>
                    <td><input type="radio" name="q57" value="2" id="q57"></td>
                    <td><input type="radio" name="q57" value="3" id="q57"></td>
                    <td><input type="radio" name="q57" value="4" id="q57"></td>
                    <td><input type="radio" name="q57" value="5" id="q57"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">A tökéletességre törekszem
                    <td><input type="radio" name="q58" value="1" id="q58"></td>
                    <td><input type="radio" name="q58" value="2" id="q58"></td>
                    <td><input type="radio" name="q58" value="3" id="q58"></td>
                    <td><input type="radio" name="q58" value="4" id="q58"></td>
                    <td><input type="radio" name="q58" value="5" id="q58"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">A tökéletességre törekszem
                    <td><input type="radio" name="q59" value="1" id="q59"></td>
                    <td><input type="radio" name="q59" value="2" id="q59"></td>
                    <td><input type="radio" name="q59" value="3" id="q59"></td>
                    <td><input type="radio" name="q59" value="4" id="q59"></td>
                    <td><input type="radio" name="q59" value="5" id="q59"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem szoktam látni az érzelmi hátterét egy festménynek
                    <td><input type="radio" name="q60" value="1" id="q60"></td>
                    <td><input type="radio" name="q60" value="2" id="q60"></td>
                    <td><input type="radio" name="q60" value="3" id="q60"></td>
                    <td><input type="radio" name="q60" value="4" id="q60"></td>
                    <td><input type="radio" name="q60" value="5" id="q60"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit6" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

