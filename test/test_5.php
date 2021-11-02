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
                <td class="first-col">Ritkán vagyok vagyok depressziós hangulatban
                    <td><input type="radio" name="q41" value="1" id="q41"></td>
                    <td><input type="radio" name="q41" value="2" id="q41"></td>
                    <td><input type="radio" name="q41" value="3" id="q41"></td>
                    <td><input type="radio" name="q41" value="4" id="q41"></td>
                    <td><input type="radio" name="q41" value="5" id="q41"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szimpatizálok mások érzéseivel
                    <td><input type="radio" name="q42" value="1" id="q42"></td>
                    <td><input type="radio" name="q42" value="2" id="q42"></td>
                    <td><input type="radio" name="q42" value="3" id="q42"></td>
                    <td><input type="radio" name="q42" value="4" id="q42"></td>
                    <td><input type="radio" name="q42" value="5" id="q42"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Mindig befejezem amit elkezdek
                    <td><input type="radio" name="q43" value="1" id="q43"></td>
                    <td><input type="radio" name="q43" value="2" id="q43"></td>
                    <td><input type="radio" name="q43" value="3" id="q43"></td>
                    <td><input type="radio" name="q43" value="4" id="q43"></td>
                    <td><input type="radio" name="q43" value="5" id="q43"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen megtalálom aközös hangot másokkal
                    <td><input type="radio" name="q44" value="1" id="q44"></td>
                    <td><input type="radio" name="q44" value="2" id="q44"></td>
                    <td><input type="radio" name="q44" value="3" id="q44"></td>
                    <td><input type="radio" name="q44" value="4" id="q44"></td>
                    <td><input type="radio" name="q44" value="5" id="q44"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kerülöm a filozófiai kérdéseket és inkább csevegek
                    <td><input type="radio" name="q45" value="1" id="q45"></td>
                    <td><input type="radio" name="q45" value="2" id="q45"></td>
                    <td><input type="radio" name="q45" value="3" id="q45"></td>
                    <td><input type="radio" name="q45" value="4" id="q45"></td>
                    <td><input type="radio" name="q45" value="5" id="q45"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyakran szokott változni a kedvem
                    <td><input type="radio" name="q46" value="1" id="q46"></td>
                    <td><input type="radio" name="q46" value="2" id="q46"></td>
                    <td><input type="radio" name="q46" value="3" id="q46"></td>
                    <td><input type="radio" name="q46" value="4" id="q46"></td>
                    <td><input type="radio" name="q46" value="5" id="q46"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem szeretem a saját akaratomat érvényesíteni
                    <td><input type="radio" name="q47" value="1" id="q47"></td>
                    <td><input type="radio" name="q47" value="2" id="q47"></td>
                    <td><input type="radio" name="q47" value="3" id="q47"></td>
                    <td><input type="radio" name="q47" value="4" id="q47"></td>
                    <td><input type="radio" name="q47" value="5" id="q47"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem zavarnak a rendetlen emberek
                    <td><input type="radio" name="q48" value="1" id="q48"></td>
                    <td><input type="radio" name="q48" value="2" id="q48"></td>
                    <td><input type="radio" name="q48" value="3" id="q48"></td>
                    <td><input type="radio" name="q48" value="4" id="q48"></td>
                    <td><input type="radio" name="q48" value="5" id="q48"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Megvárom, hogy mások irányítsanak
                    <td><input type="radio" name="q49" value="1" id="q49"></td>
                    <td><input type="radio" name="q49" value="2" id="q49"></td>
                    <td><input type="radio" name="q49" value="3" id="q49"></td>
                    <td><input type="radio" name="q49" value="4" id="q49"></td>
                    <td><input type="radio" name="q49" value="5" id="q49"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem különösen érdekel a szépirodalom
                    <td><input type="radio" name="q50" value="1" id="q50"></td>
                    <td><input type="radio" name="q50" value="2" id="q50"></td>
                    <td><input type="radio" name="q50" value="3" id="q50"></td>
                    <td><input type="radio" name="q50" value="4" id="q50"></td>
                    <td><input type="radio" name="q50" value="5" id="q50"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit5" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

