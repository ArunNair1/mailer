<?php 
if(isset($_POST["email"]))
{
	echo "test";
	
	
	require 'class/PHPMailer.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->Host = 'smtpout.secureserver.net';
	$mail->Port = '80';
	$mail->SMTPAuth = true;
	$mail->Username = 'codelearnervin@gmail.com';
	$mail->Password = '9818064641';
	$mail->SMTPSecure = '';
	$mail->From = 'codelearnervin@gmail.com';
	$mail->FromName = 'codelearner';
	$mail->AddAddress('arun.vin09@gmail.com','Name');
	$mail->IsHTML(true);
	$mail->Subject='test';
	$mail->body = 'test again';
	
	try
	{
		$mail->Send()
		echo "snet";
	}
	catch(Exception $e)
	{
		print_r($mail->ErrorInfo);
	}
	
	
	
}; 

//$returnvalue = mail($to, $subject, $message);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>