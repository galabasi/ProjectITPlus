<?php
// use libs\PHPMailer;
require APP . 'libs/PHPMailer.php';
class Contact extends Controller
{
	public function sendMail(){
		$mail = new PHPMailer;
		$mail->isSMTP(); 
		$mail->SMTPDebug = 0;
		$mail->Host = 'smtp.gmail.com'; 
		$mail->SMTPAuth = true;
		$mail->Username = 'nluu1378@gmail.com';                 // SMTP username
		$mail->Password = ''; 
		$mail->Port = 465; 
		$mail->SMTPSecure = 'ssl';
		$mail->IsHTML(true); 
		$mail->CharSet="UTF-8";

		//email nguoi gui ==============================
		$mail->setFrom('nluu1378@gmail.com','$setting->titleemail');
		//==============================================
		//mail nguoi nhan
		$mail->addAddress('tenhayko@gmail.com');
		$mail->Subject = '$subject';
		// $mail->Body = html_entity_decode('$body');
        $mail->Send();
	}
	// public function sendMail(){
	// 	require APP . 'libs/PHPMailerAutoload.php';
	// 		$mail             = new PHPMailer();
	// 		$mail->IsSMTP();   
	// 		$mail->SMTPAuth   = true;  
	// 		$nameFrom = $_POST['txtName'];  
	// 	    $mailFrom = "nluu1378@gmail.com"; 
	// 	    $mailPass = "kakalatoi";       
	// 	    $nameTo = 'SHOP CART'; 
	// 	    $mailTo = "nluu246@gmail.com";   
	// 	    $body             = $_POST['txtContent'];   
	// 	    $title = $_POST['txtSubject'];   
	// 	    $mail->CharSet  = "UTF-8";
	// 	    $mail->SMTPDebug  = 4;   
		      
	// 	    $mail->SMTPSecure = "tls";   
	// 	    $mail->Host       = "smtp.gmail.com";    
	// 	    $mail->Port       = 587;        
		   
	// 	    $mail->Username   = $mailFrom;  
	// 	    $mail->Password   = $mailPass;             
	// 	    $mail->SetFrom($mailFrom, $nameFrom);
	// 	    $mail->AddReplyTo('nluu246@gmail.com', 'abc'); 
	// 	    $mail->Subject    = $title; 
	// 	    $mail->MsgHTML($body);
	// 	    $mail->AddAddress($mailTo, $nameTo);
	// 	    echo "<pre>";
	// 	    print_r($mail->send());
	// 	    die;
	// 	    if(!$mail->send()) {
	// 	    	echo 'Vui lòng kiểm tra lại, xin cảm ơn!';
	// 	    	echo "error".$mail->ErrorInfo;
	// 	    } else {

	// 	    	echo 'Cảm ơn đã gửi mail cho chúng tôi! ';
	// 	    }
	// }
	public function index()
	{
		if(isset($_POST["send"])){
			$this->sendMail();
		}
	    require APP . 'view/templates/header.php';
	    require APP . 'view/Contact/index.php';
	    require APP . 'view/templates/footer.php';
	}
}

