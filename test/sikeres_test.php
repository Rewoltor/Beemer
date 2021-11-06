<?php
    session_start();



        if (isset($_SESSION['userId'])) {
            echo    '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Kijelentkezés</button>
                    </form>';
            echo    'Meg szeretné tekinteni az eredményt?
                    <form action="Includes/save_result.inc.php" method="post">
                        <div class="register-button">
                            <input type="submit" name="submit" class="inputButton"> <!-- a "name" számít a .php-nál -->
                        </div>
                    </form>'; //path to first test file
        } else {
            echo    "Sajnos még nem jelentkezett be";
            echo    '<form action="../Regist/login.php" method="post">
                        <button type="submit" name="logout-submit">Bejelentkezés</button>
                    </form>';
            echo    '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>';
        }
