<?php
    session_start();
?>

<main>
    <?php
        if (isset($_SESSION['usersEmail'])) {
            echo    '<form action="Includes/logout.inc.php" method="post">
                        <button type="logout" name="logout-submit">Kijelentkezés</button>
                    </form>';
            echo    '<div class="register">
                    Ki szeretné tölteni a tesztet?
                    <a href="../../test/test_1.php"><button id="register-link">Teszt kitöltése</button></a></div>'; //path to first test file
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
</main>
