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
                <td class="first-col">Könnyen elcsüggedek
                    <td><input type="radio" name="q61" value="1" id="q61"></td>
                    <td><input type="radio" name="q61" value="2" id="q61"></td>
                    <td><input type="radio" name="q61" value="3" id="q61"></td>
                    <td><input type="radio" name="q61" value="4" id="q61"></td>
                    <td><input type="radio" name="q61" value="5" id="q61"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kevés időt szánok másokra
                    <td><input type="radio" name="q62" value="1" id="q62"></td>
                    <td><input type="radio" name="q62" value="2" id="q62"></td>
                    <td><input type="radio" name="q62" value="3" id="q62"></td>
                    <td><input type="radio" name="q62" value="4" id="q62"></td>
                    <td><input type="radio" name="q62" value="5" id="q62"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyorsan elintézem a dolgaimat
                    <td><input type="radio" name="q63" value="1" id="q63"></td>
                    <td><input type="radio" name="q63" value="2" id="q63"></td>
                    <td><input type="radio" name="q63" value="3" id="q63"></td>
                    <td><input type="radio" name="q63" value="4" id="q63"></td>
                    <td><input type="radio" name="q63" value="5" id="q63"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem vagyok nagyon beszédes
                    <td><input type="radio" name="q64" value="1" id="q64"></td>
                    <td><input type="radio" name="q64" value="2" id="q64"></td>
                    <td><input type="radio" name="q64" value="3" id="q64"></td>
                    <td><input type="radio" name="q64" value="4" id="q64"></td>
                    <td><input type="radio" name="q64" value="5" id="q64"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nagyon színes a szókincsem
                    <td><input type="radio" name="q65" value="1" id="q65"></td>
                    <td><input type="radio" name="q65" value="2" id="q65"></td>
                    <td><input type="radio" name="q65" value="3" id="q65"></td>
                    <td><input type="radio" name="q65" value="4" id="q65"></td>
                    <td><input type="radio" name="q65" value="5" id="q65"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Olyan ember vagyok, akinek a hangulata könnyen ingadozik
                    <td><input type="radio" name="q66" value="1" id="q66"></td>
                    <td><input type="radio" name="q66" value="2" id="q66"></td>
                    <td><input type="radio" name="q66" value="3" id="q66"></td>
                    <td><input type="radio" name="q66" value="4" id="q66"></td>
                    <td><input type="radio" name="q66" value="5" id="q66"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen megsértek embereket
                    <td><input type="radio" name="q67" value="1" id="q67"></td>
                    <td><input type="radio" name="q67" value="2" id="q67"></td>
                    <td><input type="radio" name="q67" value="3" id="q67"></td>
                    <td><input type="radio" name="q67" value="4" id="q67"></td>
                    <td><input type="radio" name="q67" value="5" id="q67"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem zavar a rendetlenség
                    <td><input type="radio" name="q68" value="1" id="q68"></td>
                    <td><input type="radio" name="q68" value="2" id="q68"></td>
                    <td><input type="radio" name="q68" value="3" id="q68"></td>
                    <td><input type="radio" name="q68" value="4" id="q68"></td>
                    <td><input type="radio" name="q68" value="5" id="q68"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen rábeszélek embereket dolgokra
                    <td><input type="radio" name="q69" value="1" id="q69"></td>
                    <td><input type="radio" name="q69" value="2" id="q69"></td>
                    <td><input type="radio" name="q69" value="3" id="q69"></td>
                    <td><input type="radio" name="q69" value="4" id="q69"></td>
                    <td><input type="radio" name="q69" value="5" id="q69"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szükségem van rá, hogy szabadon engedjem a kreativitásomat
                    <td><input type="radio" name="q70" value="1" id="q70"></td>
                    <td><input type="radio" name="q70" value="2" id="q70"></td>
                    <td><input type="radio" name="q70" value="3" id="q70"></td>
                    <td><input type="radio" name="q70" value="4" id="q70"></td>
                    <td><input type="radio" name="q70" value="5" id="q70"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit7" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

