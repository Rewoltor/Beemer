<?php
    session_start();



        if (isset($_SESSION['userId'])) {
            echo    '<form action="../Regist/Includes/logout.inc.php" method="post">
                        <button type="logout" name="logout-submit">Kijelentkezés</button>
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
                }
