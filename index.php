<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if(isset($_POST["email"]))
{
	
	echo "arun";
	//try
	//{
	
		use ('./classes/PHPMailer.php');
		use ('./classes/SMTP.php');
		
		
		$mail = new PHPMailer();
		
		/*
		$mail->Mailer = 'smtp';
		$mail->IsSMTP();
		$mail->Host = 'smtp.gmail.com'; 
		$mail->Port       = 587; 
		$mail->SMTPAuth = true;
		$mail->Username = 'codelearnervin@gmail.com';
		$mail->Password = '9818064641';
		$mail->SMTPSecure = 'ssl';
		
		$mail->From = "codelearnervin@gmail.com";
		$mail->setFrom = 'codelearnervin@gmail.com';
		$mail->FromName = 'codelearner';
		$mail->AddAddress('arun.vin09@gmail.com','Name');
		$mail->IsHTML(true);
		$mail->Subject='test';
		$mail->Body = 'test again';
		$mail->SMTPDebug = 2;
	
		// if($mail->Send())
		// {
			// echo "snt";
		// }
		*/
		//echo "not sent".$mail->ErrorInfo;
	}
	// catch(Exception $e)
	// {
		// echo ($mail->ErrorInfo);
		// echo $e->errorMessage();
	// }
	
	echo "process complte";
	
}; 

//$returnvalue = mail($to, $subject, $message);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>