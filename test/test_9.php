<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Website Feedback Form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="js/test.css">
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
                <td class="first-col">Könnyen kiborulok nagy eseményektől
                    <td><input type="radio" name="q81" value="1" id="q81"></td>
                    <td><input type="radio" name="q81" value="2" id="q81"></td>
                    <td><input type="radio" name="q81" value="3" id="q81"></td>
                    <td><input type="radio" name="q81" value="4" id="q81"></td>
                    <td><input type="radio" name="q81" value="5" id="q81"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nincsen puha oldalam
                    <td><input type="radio" name="q82" value="1" id="q82"></td>
                    <td><input type="radio" name="q82" value="2" id="q82"></td>
                    <td><input type="radio" name="q82" value="3" id="q82"></td>
                    <td><input type="radio" name="q82" value="4" id="q82"></td>
                    <td><input type="radio" name="q82" value="5" id="q82"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyakran halasztom el a döntéseimet
                    <td><input type="radio" name="q83" value="1" id="q83"></td>
                    <td><input type="radio" name="q83" value="2" id="q83"></td>
                    <td><input type="radio" name="q83" value="3" id="q83"></td>
                    <td><input type="radio" name="q83" value="4" id="q83"></td>
                    <td><input type="radio" name="q83" value="5" id="q83"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nagyon gyakran szórakoztatom magamat és másokat
                    <td><input type="radio" name="q84" value="1" id="q84"></td>
                    <td><input type="radio" name="q84" value="2" id="q84"></td>
                    <td><input type="radio" name="q84" value="3" id="q84"></td>
                    <td><input type="radio" name="q84" value="4" id="q84"></td>
                    <td><input type="radio" name="q84" value="5" id="q84"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Lassan tanulok
                    <td><input type="radio" name="q85" value="1" id="q85"></td>
                    <td><input type="radio" name="q85" value="2" id="q85"></td>
                    <td><input type="radio" name="q85" value="3" id="q85"></td>
                    <td><input type="radio" name="q85" value="4" id="q85"></td>
                    <td><input type="radio" name="q85" value="5" id="q85"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyel leszek zaklatott
                    <td><input type="radio" name="q86" value="1" id="q86"></td>
                    <td><input type="radio" name="q86" value="2" id="q86"></td>
                    <td><input type="radio" name="q86" value="3" id="q86"></td>
                    <td><input type="radio" name="q86" value="4" id="q86"></td>
                    <td><input type="radio" name="q86" value="5" id="q86"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretek egy jó vitát
                    <td><input type="radio" name="q87" value="1" id="q87"></td>
                    <td><input type="radio" name="q87" value="2" id="q87"></td>
                    <td><input type="radio" name="q87" value="3" id="q87"></td>
                    <td><input type="radio" name="q87" value="4" id="q87"></td>
                    <td><input type="radio" name="q87" value="5" id="q87"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretek egy jó vitát
                    <td><input type="radio" name="q88" value="1" id="q88"></td>
                    <td><input type="radio" name="q88" value="2" id="q88"></td>
                    <td><input type="radio" name="q88" value="3" id="q88"></td>
                    <td><input type="radio" name="q88" value="4" id="q88"></td>
                    <td><input type="radio" name="q88" value="5" id="q88"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Én vagyok az első aki cselekszik
                    <td><input type="radio" name="q89" value="1" id="q89"></td>
                    <td><input type="radio" name="q89" value="2" id="q89"></td>
                    <td><input type="radio" name="q89" value="3" id="q89"></td>
                    <td><input type="radio" name="q89" value="4" id="q89"></td>
                    <td><input type="radio" name="q89" value="5" id="q89"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán ábrándozom
                    <td><input type="radio" name="q90" value="1" id="q90"></td>
                    <td><input type="radio" name="q90" value="2" id="q90"></td>
                    <td><input type="radio" name="q90" value="3" id="q90"></td>
                    <td><input type="radio" name="q90" value="4" id="q90"></td>
                    <td><input type="radio" name="q90" value="5" id="q90"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit9" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

