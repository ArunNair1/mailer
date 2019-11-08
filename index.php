<?php 
if(isset($_POST["email"]))
{
	require 'class/PHPMailer.php';
	$mail = new PHPMailer;
}; 

//$returnvalue = mail($to, $subject, $message);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>