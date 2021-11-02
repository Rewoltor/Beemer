<?php
    session_start();
?>

<main>
    <?php
        if (isset($_SESSION['usersEmail'])) {
            echo "<li><a href='profile.php'>Cool</a></li>";
        } else{
            echo "<li><a href='profile.php'>Sign up</a></li>";
        }
    ?>
</main>

