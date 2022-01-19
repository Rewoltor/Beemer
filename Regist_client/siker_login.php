<?php
    session_start();

    $clientsId = $_SESSION["clientsId"];

    echo $clientsId;

?>

<main>
    <?php


        if (isset($_SESSION['clientsId'])) {

            echo   '<form action="Includes/mailer.inc.php" method="post">
                        <div class="input">
                            Írja be az emailt
                            <input id="email" placeholder="Email" name="email" type="email" required class="validate">
                            <input type="submit" name="submit" value="Email küldése" />
                        </div>
                    </form>'; 

            echo   '<div class="col-md-12 head">
                        <div class="float-right">
                            <a href="Includes/download.inc.php" name="sendEmail" class="btn btn-success"><i class="dwn"></i> Export</a>
                        </div>
                    </div>';

            echo   '<form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Kijelentkezés</button>
                    </form>';
                    
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
