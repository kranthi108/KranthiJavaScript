<?php
/**
* Simple example script using PHPMailer with exceptions enabled
* @package phpmailer
* @version $Id$
*/

require "PHPMailer/class.phpmailer.php";

define('GUSER', 'kranthiramireddy@gmail.com'); // GMail username
define('GPWD', 'agtsp@cnags2'); // GMail password

function smtpmailer($to, $from, $from_name, $subject, $body) {
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Priority = 1;
	$mail->IsHTML(true);
//	$Mail->CharSet = 'UTF-8';
 //  	$Mail->Encoding = '8bit';
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

 smtpmailer("jaswanthvishnu10@gmail.com", 'kranthiramireddy@gmail.com' , 'Educenter Updates', 'New projects added on your interest', 'u have new projects to checkout or updates on projects you are interested');



?>
