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
                <td class="first-col">Kényelmesen érzem magamat nagy társaságban
                    <td><input type="radio" name="q21" value="1" id="q21"></td>
                    <td><input type="radio" name="q21" value="2" id="q21"></td>
                    <td><input type="radio" name="q21" value="3" id="q21"></td>
                    <td><input type="radio" name="q21" value="4" id="q21"></td>
                    <td><input type="radio" name="q21" value="5" id="q21"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Érdeklődöm más emberek jólétéről
                    <td><input type="radio" name="q22" value="1" id="q22"></td>
                    <td><input type="radio" name="q22" value="2" id="q22"></td>
                    <td><input type="radio" name="q22" value="3" id="q22"></td>
                    <td><input type="radio" name="q22" value="4" id="q22"></td>
                    <td><input type="radio" name="q22" value="5" id="q22"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezem veszem rá magamat, hogy nekiálljak a munkának
                    <td><input type="radio" name="q23" value="1" id="q23"></td>
                    <td><input type="radio" name="q23" value="2" id="q23"></td>
                    <td><input type="radio" name="q23" value="3" id="q23"></td>
                    <td><input type="radio" name="q23" value="4" id="q23"></td>
                    <td><input type="radio" name="q23" value="5" id="q23"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Távolságot tartok az emberektől
                    <td><input type="radio" name="q24" value="1" id="q24"></td>
                    <td><input type="radio" name="q24" value="2" id="q24"></td>
                    <td><input type="radio" name="q24" value="3" id="q24"></td>
                    <td><input type="radio" name="q24" value="4" id="q24"></td>
                    <td><input type="radio" name="q24" value="5" id="q24"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen kezelek sok információt
                    <td><input type="radio" name="q25" value="1" id="q25"></td>
                    <td><input type="radio" name="q25" value="2" id="q25"></td>
                    <td><input type="radio" name="q25" value="3" id="q25"></td>
                    <td><input type="radio" name="q25" value="4" id="q25"></td>
                    <td><input type="radio" name="q25" value="5" id="q25"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen ki lehet hozni a sodromból
                    <td><input type="radio" name="q26" value="1" id="q26"></td>
                    <td><input type="radio" name="q26" value="2" id="q26"></td>
                    <td><input type="radio" name="q26" value="3" id="q26"></td>
                    <td><input type="radio" name="q26" value="4" id="q26"></td>
                    <td><input type="radio" name="q26" value="5" id="q26"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem szeretek rámenősnek tűnni
                    <td><input type="radio" name="q27" value="1" id="q27"></td>
                    <td><input type="radio" name="q27" value="2" id="q27"></td>
                    <td><input type="radio" name="q27" value="3" id="q27"></td>
                    <td><input type="radio" name="q27" value="4" id="q27"></td>
                    <td><input type="radio" name="q27" value="5" id="q27"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Rendben tartom a dolgaimat
                    <td><input type="radio" name="q28" value="1" id="q28"></td>
                    <td><input type="radio" name="q28" value="2" id="q28"></td>
                    <td><input type="radio" name="q28" value="3" id="q28"></td>
                    <td><input type="radio" name="q28" value="4" id="q28"></td>
                    <td><input type="radio" name="q28" value="5" id="q28"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem vagyok meggyőző
                    <td><input type="radio" name="q29" value="1" id="q29"></td>
                    <td><input type="radio" name="q29" value="2" id="q29"></td>
                    <td><input type="radio" name="q29" value="3" id="q29"></td>
                    <td><input type="radio" name="q29" value="4" id="q29"></td>
                    <td><input type="radio" name="q29" value="5" id="q29"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Imádok visszajelzést adni
                    <td><input type="radio" name="q30" value="1" id="q30"></td>
                    <td><input type="radio" name="q30" value="2" id="q30"></td>
                    <td><input type="radio" name="q30" value="3" id="q30"></td>
                    <td><input type="radio" name="q30" value="4" id="q30"></td>
                    <td><input type="radio" name="q30" value="5" id="q30"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit3" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

