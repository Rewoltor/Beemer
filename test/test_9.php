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
                <td class="first-col">Könnyen kiborulok eseményektől
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
                <td class="first-col">Halogatom el a döntéseimet
                    <td><input type="radio" name="q83" value="1" id="q83"></td>
                    <td><input type="radio" name="q83" value="2" id="q83"></td>
                    <td><input type="radio" name="q83" value="3" id="q83"></td>
                    <td><input type="radio" name="q83" value="4" id="q83"></td>
                    <td><input type="radio" name="q83" value="5" id="q83"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyakran szórakozom
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
                <td class="first-col">Könnyen fel lehet zaklatni
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
                <td class="first-col">Azt gondolom, hogy a szabályok csak útmutatók
                    <td><input type="radio" name="q88" value="1" id="q88"></td>
                    <td><input type="radio" name="q88" value="2" id="q88"></td>
                    <td><input type="radio" name="q88" value="3" id="q88"></td>
                    <td><input type="radio" name="q88" value="4" id="q88"></td>
                    <td><input type="radio" name="q88" value="5" id="q88"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Én vagyok az első, aki cselekszik
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
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit9" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

