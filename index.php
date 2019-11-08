<?php 
if(isset($_POST["email"]))
{
	
	echo "arun";
	try
	{
		require 'class/PHPMailer.php';
		require 'class/SMTP.php';
	$mail = new PHPMailer;
	$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
	
	$mail->IsSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->Port       = 587; 
	$mail->SMTPAuth = true;
	$mail->Username = 'codelearnervin@gmail.com';
	$mail->Password = '9818064641';
	$mail->SMTPSecure = '';
	$mail->setFrom = 'codelearnervin@gmail.com';
	$mail->FromName = 'codelearner';
	$mail->AddAddress('arun.vin09@gmail.com','Name');
	$mail->IsHTML(true);
	$mail->Subject='test';
	$mail->body = 'test again';
	
		$mail->Send();
		echo "snet";
	}
	catch(Exception $e)
	{
		echo ($mail->ErrorInfo);
	}
	
	echo "process complte";
	
}; 

//$returnvalue = mail($to, $subject, $message);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>