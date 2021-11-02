<?php
    session_start();
/*
    session_start();
    require_once 'Includes/dbh.inc.php';
    require_once 'Includes/calc/a.calc.inc.php';
    require_once 'Includes/calc/c.calc.inc.php';
    require_once 'Includes/calc/e.calc.inc.php';
    require_once 'Includes/calc/n.calc.inc.php';
    require_once 'Includes/calc/o.calc.inc.php';
    require_once 'Includes/functions.test.save.php';

    echo "$n_rest";

*/


        if (isset($_SESSION['userId'])) {
            echo    '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Kijelentkezés</button>
                    </form>';
            echo    'Meg szeretné tekinteni az eredményt?
                    <form action="Includes/save_result.inc.php" >
                        <button name="submit" type="submit">Eredmény
                    </form>'; //path to first test file
        } else {
            echo    "Sajnos még nem jelentkezett be";
            echo    '<form action="login.php" method="post">
                        <button type="submit" name="logout-submit">Bejelentkezés</button>
                    </form>';
            echo    '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>';
        }

?>

<form action="Includes/save_result.inc.php" method="post">
    <div class="register-button">
        <input type="submit" name="submit" class="inputButton"> <!-- a "name" számít a .php-nál -->
    </div>
</form>