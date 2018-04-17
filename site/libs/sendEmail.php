<?php

namespace common\libs;
use common\libs\PHPMailer;

/**
* 
*/
class sendEmail{
	function sendEmail($emailSend,$subject,$body="Nothing"){
		$setting = \backend\models\Setting::find()->where(['id'=>1])->one();
		$mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.gmail.com'; 
		$mail->SMTPAuth = true;
		$mail->Username = $setting->email;                 // SMTP username
		$mail->Password = $setting->password; 
		$mail->Port = 465; 
		$mail->SMTPSecure = 'ssl';
		$mail->IsHTML(true); 
		$mail->CharSet="UTF-8";

		//email nguoi gui ==============================
		$mail->setFrom($setting->email,$setting->titleemail);
		//==============================================
		//mail nguoi nhan
		$mail->addAddress($emailSend);
		$mail->Subject = $subject;
		$mail->Body = html_entity_decode($body);
        $mail->send();
		
	}
}