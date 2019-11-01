<?php 
echo $_POST["email"]; 
$to      = "arun.vin09@gmail.com";
$subject = 'the subject';
$message = 'hello';

$returnvalue = mail($to, $subject, $message);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>