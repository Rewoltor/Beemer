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
                <td class="first-col">Gyakran kételkedem a dolgokban
                    <td><input type="radio" name="q11" value="1" id="q11"></td>
                    <td><input type="radio" name="q11" value="2" id="q11"></td>
                    <td><input type="radio" name="q11" value="3" id="q11"></td>
                    <td><input type="radio" name="q11" value="4" id="q11"></td>
                    <td><input type="radio" name="q11" value="5" id="q11"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen átélem mások érzéseit
                    <td><input type="radio" name="q12" value="1" id="q12"></td>
                    <td><input type="radio" name="q12" value="2" id="q12"></td>
                    <td><input type="radio" name="q12" value="3" id="q12"></td>
                    <td><input type="radio" name="q12" value="4" id="q12"></td>
                    <td><input type="radio" name="q12" value="5" id="q12"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kifolyik az idő a kezem közül
                    <td><input type="radio" name="q13" value="1" id="q13"></td>
                    <td><input type="radio" name="q13" value="2" id="q13"></td>
                    <td><input type="radio" name="q13" value="3" id="q13"></td>
                    <td><input type="radio" name="q13" value="4" id="q13"></td>
                    <td><input type="radio" name="q13" value="5" id="q13"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehéz engem megismerni
                    <td><input type="radio" name="q14" value="1" id="q14"></td>
                    <td><input type="radio" name="q14" value="2" id="q14"></td>
                    <td><input type="radio" name="q14" value="3" id="q14"></td>
                    <td><input type="radio" name="q14" value="4" id="q14"></td>
                    <td><input type="radio" name="q14" value="5" id="q14"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezen értek meg absztrakt gondolatokat
                    <td><input type="radio" name="q15" value="1" id="q15"></td>
                    <td><input type="radio" name="q15" value="2" id="q15"></td>
                    <td><input type="radio" name="q15" value="3" id="q15"></td>
                    <td><input type="radio" name="q15" value="4" id="q15"></td>
                    <td><input type="radio" name="q15" value="5" id="q15"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán vagyok ingerült
                    <td><input type="radio" name="q16" value="1" id="q16"></td>
                    <td><input type="radio" name="q16" value="2" id="q16"></td>
                    <td><input type="radio" name="q16" value="3" id="q16"></td>
                    <td><input type="radio" name="q16" value="4" id="q16"></td>
                    <td><input type="radio" name="q16" value="5" id="q16"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyakran gondolom, hogy jobb vagyok másoknál
                    <td><input type="radio" name="q17" value="1" id="q17"></td>
                    <td><input type="radio" name="q17" value="2" id="q17"></td>
                    <td><input type="radio" name="q17" value="3" id="q17"></td>
                    <td><input type="radio" name="q17" value="4" id="q17"></td>
                    <td><input type="radio" name="q17" value="5" id="q17"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Szeretem a rendet
                    <td><input type="radio" name="q18" value="1" id="q18"></td>
                    <td><input type="radio" name="q18" value="2" id="q18"></td>
                    <td><input type="radio" name="q18" value="3" id="q18"></td>
                    <td><input type="radio" name="q18" value="4" id="q18"></td>
                    <td><input type="radio" name="q18" value="5" id="q18"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Erős személyiségem van
                    <td><input type="radio" name="q19" value="1" id="q19"></td>
                    <td><input type="radio" name="q19" value="2" id="q19"></td>
                    <td><input type="radio" name="q19" value="3" id="q19"></td>
                    <td><input type="radio" name="q19" value="4" id="q19"></td>
                    <td><input type="radio" name="q19" value="5" id="q19"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Hiszek a művészet fontosságában
                    <td><input type="radio" name="q20" value="1" id="q20"></td>
                    <td><input type="radio" name="q20" value="2" id="q20"></td>
                    <td><input type="radio" name="q20" value="3" id="q20"></td>
                    <td><input type="radio" name="q20" value="4" id="q20"></td>
                    <td><input type="radio" name="q20" value="5" id="q20"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit2" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>
