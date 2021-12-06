<?php
    include_once 'header.php';
?>

  <body>



    <form action="Includes/test.inc.php" method="post">

        <table>
          <tr>
            <th class="first-col"></th>
            <th>Nem</th>
            <th>Inkább nem</th>
            <th>Közönbös</th>
            <th>Inkább igen</th>
            <th>Igen</th>
          </tr>


            <tr>
                <td class="first-col">Nehéz zavarba hozni
                    <td><input type="radio" name="q71" value="1" id="q71"></td>
                    <td><input type="radio" name="q71" value="2" id="q71"></td>
                    <td><input type="radio" name="q71" value="3" id="q71"></td>
                    <td><input type="radio" name="q71" value="4" id="q71"></td>
                    <td><input type="radio" name="q71" value="5" id="q71"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Érdeklődöm mások élete iránt
                    <td><input type="radio" name="q72" value="1" id="q72"></td>
                    <td><input type="radio" name="q72" value="2" id="q72"></td>
                    <td><input type="radio" name="q72" value="3" id="q72"></td>
                    <td><input type="radio" name="q72" value="4" id="q72"></td>
                    <td><input type="radio" name="q72" value="5" id="q72"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Tudom, hogy mit csinálok
                    <td><input type="radio" name="q73" value="1" id="q73"></td>
                    <td><input type="radio" name="q73" value="2" id="q73"></td>
                    <td><input type="radio" name="q73" value="3" id="q73"></td>
                    <td><input type="radio" name="q73" value="4" id="q73"></td>
                    <td><input type="radio" name="q73" value="5" id="q73"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Kimutatom, ha boldog vagyok
                    <td><input type="radio" name="q74" value="1" id="q74"></td>
                    <td><input type="radio" name="q74" value="2" id="q74"></td>
                    <td><input type="radio" name="q74" value="3" id="q74"></td>
                    <td><input type="radio" name="q74" value="4" id="q74"></td>
                    <td><input type="radio" name="q74" value="5" id="q74"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Gyorsan gondolkodom
                    <td><input type="radio" name="q75" value="1" id="q75"></td>
                    <td><input type="radio" name="q75" value="2" id="q75"></td>
                    <td><input type="radio" name="q75" value="3" id="q75"></td>
                    <td><input type="radio" name="q75" value="4" id="q75"></td>
                    <td><input type="radio" name="q75" value="5" id="q75"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezem lehet felidegesíteni
                    <td><input type="radio" name="q76" value="1" id="q76"></td>
                    <td><input type="radio" name="q76" value="2" id="q76"></td>
                    <td><input type="radio" name="q76" value="3" id="q76"></td>
                    <td><input type="radio" name="q76" value="4" id="q76"></td>
                    <td><input type="radio" name="q76" value="5" id="q76"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Keresem a konfliktust
                    <td><input type="radio" name="q77" value="1" id="q77"></td>
                    <td><input type="radio" name="q77" value="2" id="q77"></td>
                    <td><input type="radio" name="q77" value="3" id="q77"></td>
                    <td><input type="radio" name="q77" value="4" id="q77"></td>
                    <td><input type="radio" name="q77" value="5" id="q77"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nem szeretem a rutint
                    <td><input type="radio" name="q78" value="1" id="q78"></td>
                    <td><input type="radio" name="q78" value="2" id="q78"></td>
                    <td><input type="radio" name="q78" value="3" id="q78"></td>
                    <td><input type="radio" name="q78" value="4" id="q78"></td>
                    <td><input type="radio" name="q78" value="5" id="q78"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Nehezen mondom el a véleményemet
                    <td><input type="radio" name="q79" value="1" id="q79"></td>
                    <td><input type="radio" name="q79" value="2" id="q79"></td>
                    <td><input type="radio" name="q79" value="3" id="q79"></td>
                    <td><input type="radio" name="q79" value="4" id="q79"></td>
                    <td><input type="radio" name="q79" value="5" id="q79"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Ritkán veszem el a gondolataimban
                    <td><input type="radio" name="q80" value="1" id="q80"></td>
                    <td><input type="radio" name="q80" value="2" id="q80"></td>
                    <td><input type="radio" name="q80" value="3" id="q80"></td>
                    <td><input type="radio" name="q80" value="4" id="q80"></td>
                    <td><input type="radio" name="q80" value="5" id="q80"></td>
                </td>
            </tr>
            <script LANGUAGE="JavaScript" src="Js/boxes.js"></script>  
        </table>

        <div class="register-button">
                <input type="submit" name="submit8" class="inputButton" disabled id="enable-on-two" value="Következő" /> <!-- a "name" számít a .php-nál -->
        </div>

    </form>


  </body>
</html>

