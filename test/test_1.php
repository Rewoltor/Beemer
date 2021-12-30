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
                <td class="first-col">Könnyen barátkozom
                    <td><input type="radio" name="q5" value="1" id="q5"></td>
                    <td><input type="radio" name="q5" value="2" id="q5"></td>
                    <td><input type="radio" name="q5" value="3" id="q5"></td>
                    <td><input type="radio" name="q5" value="4" id="q5"></td>
                    <td><input type="radio" name="q5" value="5" id="q5"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Könnyen haragra lobbanok
                    <td><input type="radio" name="q6" value="1" id="q6"></td>
                    <td><input type="radio" name="q6" value="2" id="q6"></td>
                    <td><input type="radio" name="q6" value="3" id="q6"></td>
                    <td><input type="radio" name="q6" value="4" id="q6"></td>
                    <td><input type="radio" name="q6" value="5" id="q6"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Tekintélytisztelő vagyok
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
                <td class="first-col">Kezembe veszem az irányítást
                    <td><input type="radio" name="q9" value="1" id="q9"></td>
                    <td><input type="radio" name="q9" value="2" id="q9"></td>
                    <td><input type="radio" name="q9" value="3" id="q9"></td>
                    <td><input type="radio" name="q9" value="4" id="q9"></td>
                    <td><input type="radio" name="q9" value="5" id="q9"></td>
                </td>
            </tr>
            <tr>
                <td class="first-col">Élvezem a természet szépségét
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
            <p desabled id="disableOn10"> Válaszoljon az összes kérdésre</p>
            <input type="submit" name="submit1" class="inputButton" value="Következő" disabled id="enable-on-two"/>
        </div>


    </form>


  </body>
</html>

