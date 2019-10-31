<?php 
echo $_POST["email"]; 
$to      = "Akhiltev@gmail.com";
$subject = 'the subject';
$message = 'hello';

//mail($to, $subject, $message, $headers);
?> 


<form method="POST"  action="<?php echo $_SERVER["PHP_SELF"];?>">

		<input type="text" name="email" id="email" placeholder="your Email">
		<button type="submit">Sign Up </button>
</form>