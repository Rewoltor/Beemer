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
                <td class="first-col">Sok félelmem van
                    <td><input type="radio" name="q91" value="1" id="q91"></td>
                    <td><input type="radio" name="q91" value="2" id="q91"></td>
                    <td><input type="radio" name="q91" value="3" id="q91"></td>
                    <td><input type="radio" name="q91" value="4" id="q91"></td>
                    <td><input type="radio" name="q91" value="5" id="q91"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretek másoknak segíteni
                    <td><input type="radio" name="q92" value="1" id="q92"></td>
                    <td><input type="radio" name="q92" value="2" id="q92"></td>
                    <td><input type="radio" name="q92" value="3" id="q92"></td>
                    <td><input type="radio" name="q92" value="4" id="q92"></td>
                    <td><input type="radio" name="q92" value="5" id="q92"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen el lehet vonni a figyelmemet
                    <td><input type="radio" name="q93" value="1" id="q93"></td>
                    <td><input type="radio" name="q93" value="2" id="q93"></td>
                    <td><input type="radio" name="q93" value="3" id="q93"></td>
                    <td><input type="radio" name="q93" value="4" id="q93"></td>
                    <td><input type="radio" name="q93" value="5" id="q93"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Sokat nevetek
                    <td><input type="radio" name="q94" value="1" id="q94"></td>
                    <td><input type="radio" name="q94" value="2" id="q94"></td>
                    <td><input type="radio" name="q94" value="3" id="q94"></td>
                    <td><input type="radio" name="q94" value="4" id="q94"></td>
                    <td><input type="radio" name="q94" value="5" id="q94"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyorsan tudok új ötletekkel előállni
                    <td><input type="radio" name="q95" value="1" id="q95"></td>
                    <td><input type="radio" name="q95" value="2" id="q95"></td>
                    <td><input type="radio" name="q95" value="3" id="q95"></td>
                    <td><input type="radio" name="q95" value="4" id="q95"></td>
                    <td><input type="radio" name="q95" value="5" id="q95"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen felkavarnak a dolgok
                    <td><input type="radio" name="q96" value="1" id="q96"></td>
                    <td><input type="radio" name="q96" value="2" id="q96"></td>
                    <td><input type="radio" name="q96" value="3" id="q96"></td>
                    <td><input type="radio" name="q96" value="4" id="q96"></td>
                    <td><input type="radio" name="q96" value="5" id="q96"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem a saját érdekeimet tartom előtérben
                    <td><input type="radio" name="q97" value="1" id="q97"></td>
                    <td><input type="radio" name="q97" value="2" id="q97"></td>
                    <td><input type="radio" name="q97" value="3" id="q97"></td>
                    <td><input type="radio" name="q97" value="4" id="q97"></td>
                    <td><input type="radio" name="q97" value="5" id="q97"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Minden részletre odafigyelek
                    <td><input type="radio" name="q98" value="1" id="q98"></td>
                    <td><input type="radio" name="q98" value="2" id="q98"></td>
                    <td><input type="radio" name="q98" value="3" id="q98"></td>
                    <td><input type="radio" name="q98" value="4" id="q98"></td>
                    <td><input type="radio" name="q98" value="5" id="q98"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem vagyok magabiztos személyiség
                    <td><input type="radio" name="q99" value="1" id="q99"></td>
                    <td><input type="radio" name="q99" value="2" id="q99"></td>
                    <td><input type="radio" name="q99" value="3" id="q99"></td>
                    <td><input type="radio" name="q99" value="4" id="q99"></td>
                    <td><input type="radio" name="q99" value="5" id="q99"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Megtalálom a szépséget azokban a dolgokban, amiket  ások észre sem vesznek
                    <td><input type="radio" name="q100" value="1" id="q100"></td>
                    <td><input type="radio" name="q100" value="2" id="q100"></td>
                    <td><input type="radio" name="q100" value="3" id="q100"></td>
                    <td><input type="radio" name="q100" value="4" id="q100"></td>
                    <td><input type="radio" name="q100" value="5" id="q100"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit10" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

