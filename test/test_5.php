<?php
    include_once 'header.php';
?>

  <body>



    <form action="Includes/test.inc.php" method="post">

        <table>
            <tr>
                <th class="right-col"></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
            </tr>


            <tr>
                <td class="first-col">Ritkán érzem magam depressziósnak
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
                <td class="first-col">Befejezem, amit elkezdek
                    <td><input type="radio" name="q43" value="1" id="q43"></td>
                    <td><input type="radio" name="q43" value="2" id="q43"></td>
                    <td><input type="radio" name="q43" value="3" id="q43"></td>
                    <td><input type="radio" name="q43" value="4" id="q43"></td>
                    <td><input type="radio" name="q43" value="5" id="q43"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen megtalálom másokkal a közös hangot 
                    <td><input type="radio" name="q44" value="1" id="q44"></td>
                    <td><input type="radio" name="q44" value="2" id="q44"></td>
                    <td><input type="radio" name="q44" value="3" id="q44"></td>
                    <td><input type="radio" name="q44" value="4" id="q44"></td>
                    <td><input type="radio" name="q44" value="5" id="q44"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kerülöm a filozofikus kérdéseket és inkább csevegek
                    <td><input type="radio" name="q45" value="1" id="q45"></td>
                    <td><input type="radio" name="q45" value="2" id="q45"></td>
                    <td><input type="radio" name="q45" value="3" id="q45"></td>
                    <td><input type="radio" name="q45" value="4" id="q45"></td>
                    <td><input type="radio" name="q45" value="5" id="q45"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen változik a hangulatom
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
                <td class="first-col">Nem vagyok vezető típus
                    <td><input type="radio" name="q49" value="1" id="q49"></td>
                    <td><input type="radio" name="q49" value="2" id="q49"></td>
                    <td><input type="radio" name="q49" value="3" id="q49"></td>
                    <td><input type="radio" name="q49" value="4" id="q49"></td>
                    <td><input type="radio" name="q49" value="5" id="q49"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem érdekel a költészet
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
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit5" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

