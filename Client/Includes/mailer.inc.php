<?php

session_start();
$content = $_POST["content"];

require_once('PHPMailer/PHPMailerAutoload.php');
$clientsId = $_SESSION["clientsId"];
$email = $_POST["email"];
$html2='gyerre velem te gyerek';
$sub = $_POST["subject"];
$html = $content. "https://beemer2.herokuapp.com/Regist/register.php?email=$email&clientsId=$clientsId";

echo smtp_mailer($email,$sub,$html);
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 3;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "beemerjanos@gmail.com";
	$mail->Password = "Beemer 1999?";
	$mail->SetFrom("beemerjanos@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		//echo $mail->ErrorInfo;
		header("location: ../client_page.php?error=error"); //post register path
		exit();
	}else{
		//return 'Sent';
		header("location: ../email.php?msg=success"); //post register path
		exit();
	}
}

?>