<?php
    include_once 'header.php';
?>

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
                <td class="first-col">Könnyen érzem magam veszélyben
                    <td><input type="radio" name="q31" value="1" id="q31"></td>
                    <td><input type="radio" name="q31" value="2" id="q31"></td>
                    <td><input type="radio" name="q31" value="3" id="q31"></td>
                    <td><input type="radio" name="q31" value="4" id="q31"></td>
                    <td><input type="radio" name="q31" value="5" id="q31"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem lehet megzavarni mások igényeivel
                    <td><input type="radio" name="q32" value="1" id="q32"></td>
                    <td><input type="radio" name="q32" value="2" id="q32"></td>
                    <td><input type="radio" name="q32" value="3" id="q32"></td>
                    <td><input type="radio" name="q32" value="4" id="q32"></td>
                    <td><input type="radio" name="q32" value="5" id="q32"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyakran rontok el dolgokat
                    <td><input type="radio" name="q33" value="1" id="q33"></td>
                    <td><input type="radio" name="q33" value="2" id="q33"></td>
                    <td><input type="radio" name="q33" value="3" id="q33"></td>
                    <td><input type="radio" name="q33" value="4" id="q33"></td>
                    <td><input type="radio" name="q33" value="5" id="q33"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kevés információt osztok meg magamról
                    <td><input type="radio" name="q34" value="1" id="q34"></td>
                    <td><input type="radio" name="q34" value="2" id="q34"></td>
                    <td><input type="radio" name="q34" value="3" id="q34"></td>
                    <td><input type="radio" name="q34" value="4" id="q34"></td>
                    <td><input type="radio" name="q34" value="5" id="q34"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretek megoldani komplex problémákat 
                    <td><input type="radio" name="q35" value="1" id="q35"></td>
                    <td><input type="radio" name="q35" value="2" id="q35"></td>
                    <td><input type="radio" name="q35" value="3" id="q35"></td>
                    <td><input type="radio" name="q35" value="4" id="q35"></td>
                    <td><input type="radio" name="q35" value="5" id="q35"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen kezelem az érzelmeimet
                    <td><input type="radio" name="q36" value="1" id="q36"></td>
                    <td><input type="radio" name="q36" value="2" id="q36"></td>
                    <td><input type="radio" name="q36" value="3" id="q36"></td>
                    <td><input type="radio" name="q36" value="4" id="q36"></td>
                    <td><input type="radio" name="q36" value="5" id="q36"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kihasználok másokat a saját céljaimra
                    <td><input type="radio" name="q37" value="1" id="q37"></td>
                    <td><input type="radio" name="q37" value="2" id="q37"></td>
                    <td><input type="radio" name="q37" value="3" id="q37"></td>
                    <td><input type="radio" name="q37" value="4" id="q37"></td>
                    <td><input type="radio" name="q37" value="5" id="q37"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Időbeosztást követek
                    <td><input type="radio" name="q38" value="1" id="q38"></td>
                    <td><input type="radio" name="q38" value="2" id="q38"></td>
                    <td><input type="radio" name="q38" value="3" id="q38"></td>
                    <td><input type="radio" name="q38" value="4" id="q38"></td>
                    <td><input type="radio" name="q38" value="5" id="q38"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Tudom, hogy kell elvarázsolni az embereket
                    <td><input type="radio" name="q39" value="1" id="q39"></td>
                    <td><input type="radio" name="q39" value="2" id="q39"></td>
                    <td><input type="radio" name="q39" value="3" id="q39"></td>
                    <td><input type="radio" name="q39" value="4" id="q39"></td>
                    <td><input type="radio" name="q39" value="5" id="q39"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nagyon el tudok veszek a zenében
                    <td><input type="radio" name="q40" value="1" id="q40"></td>
                    <td><input type="radio" name="q40" value="2" id="q40"></td>
                    <td><input type="radio" name="q40" value="3" id="q40"></td>
                    <td><input type="radio" name="q40" value="4" id="q40"></td>
                    <td><input type="radio" name="q40" value="5" id="q40"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit4" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

