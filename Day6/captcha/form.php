<?php 
session_start();

if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		// Insert you code for processing the form here, e.g emailing the submission, entering it into a database. 
		echo 'Congratulations "'.$_POST['name'].'" you are not a robot! ';
		unset($_SESSION['security_code']);
   } else {
		// Insert your code for showing an error message here
		echo 'You have provided an invalid security code go home robot!';
   }
} else {
?>

	<form action="form.php" method="post">
		<label for="name">Name: </label><input type="text" name="name" id="name" /><br />
		<label for="email">Email: </label><input type="text" name="email" id="email" /><br />
		<p>We need to check and make sure you're not a robot please enter the following characters</p>
		<img src="captcha.php?width=300&height=90&characters=5" /><br />
		<label for="security_code">Security Code: </label><input id="security_code" name="security_code" type="text" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>

<?php
	}
?>