<?php
require_once("lib/class.phpmailer.php");
require_once("lib/class.smtp.php");

function sendMail($customerEmail) {
	$message = "This is Mail Content.";

	$mail = new PHPMailer();
	$mail->From = "mycheryhr@gmail.com";
	$mail->FromName = "Jerry.Huang";
	$mail->Subject = "This is Mail Subject";
	$mail->Body = $message ;
	$mail->AddAddress($customerEmail);

	$mail->IsHTML(false);//plain text
	$mail->IsSMTP();
	$mail->Host = 'smtp.163.com';
	//$mail->Port = 465;
	$mail->SMTPAuth = true;
	//$mail->SMTPSecure = "ssl";
	$mail->Username = 'vip_star_hr@163.com';
	$mail->Password = 'Password';

	$result = $mail->Send();
	if	(!$result){
		return false;
	}

	return true;
}

   $sendresult = sendMail("616043155@qq.com");
?>