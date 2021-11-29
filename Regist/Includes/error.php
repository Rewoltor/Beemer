<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Hiányos információ, kérem töltse ki az összes mezőt</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Email formátuma helytelen</p>";
        }
        else if ($_GET["error"] == "passwordmatch") {
            echo "<p>Nem megegyező jelszó</p>";
        }
        else if ($_GET["error"] == "existingemail") {
            echo "<p>Email már regsztrálva van</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Valami nem működött kérem őróbálja újra</p>";
        }
        else if ($_GET["error"] == "Nonce") {
            echo "<p>Sikeres regisztráció</p>";
        }
        else if ($_GET["error"] == "wronglogin") { 
            echo "<p>Helytelen Email vagy jelszó</p>";
        }
        else if ($_GET["error"] == "invalidphone") { 
            echo "<p>Telefonszám formátuma helytelen</p>";
        }
        else if ($_GET["error"] == "emaildontexist") { 
            echo "<p>A megadott email még nem lett regisztrálva</p>";
        }
        else if ($_GET["error"] == "stmt") { 
            echo "<p>Szerver hiba</p>";
            echo "<p>Kérem próbálja meg újra</p>";
        }
        else if ($_GET["error"] == "loginsuccess") { 
            echo "<p>Sikeres Regisztráció</p>";
            echo "<p>Kérem jelentkezzen be</p>";
        }
}
