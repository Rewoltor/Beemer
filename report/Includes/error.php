<?php
    if (isset($_GET["success"])) {
        if ($_GET["success"] == "yeeymami") {
            echo "<p>A jellemzést napokon belül elküldjük</p>";
        }
    }    
    else if (isset($_GET["error"])) {
        if ($_GET["error"] == "wattafaka") {
            echo "<p>Valami nem ment</p>";
        }
        else if ($_GET["success"] == "stmtfailed1") {
            echo "<p>Valami nem ment</p>";
        }
        else if ($_GET["success"] == "stmtfailed1") {
            echo "<p>Valami nem ment</p>";
        }
}
