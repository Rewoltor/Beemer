<?php

/*

if (isset($_POST["submit"])) {

    $email = $_POST["email"];
    $registerTime = date('y-m-d h:i:s');

    require_once '../../dbh.inc.php';
    require_once 'functions.inc.php';

    $emaillink = "http://http://192.168.1.12/:8887/test/Client/Link.php?name=" . $email ;

    if (emptyInputSignup($email, $vez_nev, $phone_number, $pwd, $pwdrepeat) !== false) {
        header("location: ../register.php?error=emptyinput1");
        exit();
    }


    createClient($conn, $email, $vez_nev, $phone_number, $pwd, $registerTime);

}
else {
    header("location: ../register.php?wattafaka");
    exit();
}

*/

?>



<?php
$to = $_POST['email'];
$subject = "Email Subject";
$emaillink = "http://http://192.168.1.12/:8887/regist/register.php?name" . $to ;

$message .= "Töltse ki kérem a tesztet amit ezen a linken talál<br><br>";
$message .= " $emaillink <br><br>";
$message .= "Regards,<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <baltay.marton@gmail.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>