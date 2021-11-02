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
    <script src="Js/boxes.js"></script> <!-- are boxes checked .js -->
  </head>

<main>
  <?php
      if (isset($_SESSION['userId'])) {
          echo "Cool";
          echo $_SESSION['userId'];
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
                <td class="first-col">Ritkán vagyok szomorú
                    <td><input type="radio" name="q1" value="1" id="q1"></td>
                    <td><input type="radio" name="q1" value="2" id="q1"></td>
                    <td><input type="radio" name="q1" value="3" id="q1"></td>
                    <td><input type="radio" name="q1" value="4" id="q1"></td>
                    <td><input type="radio" name="q1" value="5" id="q1"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Közönyös vagyok mások problémái iránt
                    <td><input type="radio" name="q2" value="1" id="q2"></td>
                    <td><input type="radio" name="q2" value="2" id="q2"></td>
                    <td><input type="radio" name="q2" value="3" id="q2"></td>
                    <td><input type="radio" name="q2" value="4" id="q2"></td>
                    <td><input type="radio" name="q2" value="5" id="q2"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Megvalósítom a terveimet
                    <td><input type="radio" name="q3" value="1" id="q3"></td>
                    <td><input type="radio" name="q3" value="2" id="q3"></td>
                    <td><input type="radio" name="q3" value="3" id="q3"></td>
                    <td><input type="radio" name="q3" value="4" id="q3"></td>
                    <td><input type="radio" name="q3" value="5" id="q3"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen barátkozom
                    <td><input type="radio" name="q4" value="1" id="q4"></td>
                    <td><input type="radio" name="q4" value="2" id="q4"></td>
                    <td><input type="radio" name="q4" value="3" id="q4"></td>
                    <td><input type="radio" name="q4" value="4" id="q4"></td>
                    <td><input type="radio" name="q4" value="5" id="q4"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Általában gyorsan megértem a dolgokat
                    <td><input type="radio" name="q5" value="1" id="q5"></td>
                    <td><input type="radio" name="q5" value="2" id="q5"></td>
                    <td><input type="radio" name="q5" value="3" id="q5"></td>
                    <td><input type="radio" name="q5" value="4" id="q5"></td>
                    <td><input type="radio" name="q5" value="5" id="q5"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen kapok haragra
                    <td><input type="radio" name="q6" value="1" id="q6"></td>
                    <td><input type="radio" name="q6" value="2" id="q6"></td>
                    <td><input type="radio" name="q6" value="3" id="q6"></td>
                    <td><input type="radio" name="q6" value="4" id="q6"></td>
                    <td><input type="radio" name="q6" value="5" id="q6"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Tisztelem a hatalommal rendelkező embereket
                    <td><input type="radio" name="q7" value="1" id="q7"></td>
                    <td><input type="radio" name="q7" value="2" id="q7"></td>
                    <td><input type="radio" name="q7" value="3" id="q7"></td>
                    <td><input type="radio" name="q7" value="4" id="q7"></td>
                    <td><input type="radio" name="q7" value="5" id="q7"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Széthagyom a cuccaimat
                    <td><input type="radio" name="q8" value="1" id="q8"></td>
                    <td><input type="radio" name="q8" value="2" id="q8"></td>
                    <td><input type="radio" name="q8" value="3" id="q8"></td>
                    <td><input type="radio" name="q8" value="4" id="q8"></td>
                    <td><input type="radio" name="q8" value="5" id="q8"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kezembe vaszem az irányítást
                    <td><input type="radio" name="q9" value="1" id="q9"></td>
                    <td><input type="radio" name="q9" value="2" id="q9"></td>
                    <td><input type="radio" name="q9" value="3" id="q9"></td>
                    <td><input type="radio" name="q9" value="4" id="q9"></td>
                    <td><input type="radio" name="q9" value="5" id="q9"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Élvezem a természet szépségét1
                    <td><input type="radio" name="q10" value="1" id="q10"></td>
                    <td><input type="radio" name="q10" value="2" id="q10"></td>
                    <td><input type="radio" name="q10" value="3" id="q10"></td>
                    <td><input type="radio" name="q10" value="4" id="q10"></td>
                    <td><input type="radio" name="q10" value="5" id="q10"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>


        <div class="register-button">
            <input type="submit" name="submit1" class="inputButton" value="Következő" disabled id="enable-on-two"/>
        </div>

    </form>


  </body>
</html>

