
<main>
    <?php
session_start();

        if (isset($_SESSION['clientsId'])) {

            include_once 'in.php';
                    
        } else {

            include_once 'out.php';

        }
    ?>
</main>


