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
                <td class="first-col">Kellemes érzéseim vannak magammal kapcsolatban
                    <td><input type="radio" name="q21" value="1" id="q21"></td>
                    <td><input type="radio" name="q21" value="2" id="q21"></td>
                    <td><input type="radio" name="q21" value="3" id="q21"></td>
                    <td><input type="radio" name="q21" value="4" id="q21"></td>
                    <td><input type="radio" name="q21" value="5" id="q21"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Érdekelődöm más emberek jóléte iránt
                    <td><input type="radio" name="q22" value="1" id="q22"></td>
                    <td><input type="radio" name="q22" value="2" id="q22"></td>
                    <td><input type="radio" name="q22" value="3" id="q22"></td>
                    <td><input type="radio" name="q22" value="4" id="q22"></td>
                    <td><input type="radio" name="q22" value="5" id="q22"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezen veszem rá magamat, hogy nekiálljak a feladataimnak
                    <td><input type="radio" name="q23" value="1" id="q23"></td>
                    <td><input type="radio" name="q23" value="2" id="q23"></td>
                    <td><input type="radio" name="q23" value="3" id="q23"></td>
                    <td><input type="radio" name="q23" value="4" id="q23"></td>
                    <td><input type="radio" name="q23" value="5" id="q23"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Távolságtartó vagyok másokkal
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
                <td class="first-col">Hiányzik belőlem a képesség az emberek befolyásolására
                    <td><input type="radio" name="q29" value="1" id="q29"></td>
                    <td><input type="radio" name="q29" value="2" id="q29"></td>
                    <td><input type="radio" name="q29" value="3" id="q29"></td>
                    <td><input type="radio" name="q29" value="4" id="q29"></td>
                    <td><input type="radio" name="q29" value="5" id="q29"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretek gondolkodni a dolgokon
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
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit3" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

