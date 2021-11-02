<?php
    session_start();

    if (isset($_SESSION['userId'])) {
        echo "Cool";
    } else {
         echo "Not cool";
    }

?>
<!DOCTYPE html>
<html>

    <tr>
        <td><?php echo $row["co1"]; ?></td>
        <td><?php echo $row["co2"]; ?></td>
        <td><?php echo $row["co3"]; ?></td>
        <td><?php echo $row["co4"]; ?></td>
    </tr>


</html>