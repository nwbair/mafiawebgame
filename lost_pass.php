<?php

if (isset($_POST['Send'])) {
	$password = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6);
	// Generate a random password
	
	$nsql = "SELECT * FROM login WHERE mail = '" . mysqli_real_escape_string($connection, $_POST['Email']) . "'";
	$query = mysqli_query($connection, $nsql) or die(mysqli_error());
	$row = mysqli_fetch_object($query);
	$name = htmlspecialchars($row->name);
	$pass = htmlspecialchars($row->pass);
	$mail = htmlspecialchars($row->email);
	
	if ((empty($_POST['Email']))) { // if the email field is empty there will be an error.
		echo 'Email is empty.';
	} else {
	
	if (empty($name)) {
		echo 'Missing name.';
	} else {
	
	if ($_POST['Email'] != $mail) {
		echo 'Email is missing.';
	} else {
	
	if (!checkEmail($_POST['Email'])) {
		echo 'Your email is not valid.';
	} else {
	
	$result = mysqli_query($connection, "UPDATE users SET password='$password' WHERE name='" . mysqli_real_escape_string($connection, $name) . "'") or die(mysqli_error());
	
		$to = $_POST['Email'];
		$from = "no-reply@email.com";
		$subject = "Registration - Your Registration Details";
		
		$message = "<html>
		<body background=\"#4B4B4B\">
		<h1>Game Registration Details</h1>
		Dear $name, <br>
		<center>
		Your Username: $name <p>
		Your Password: $password <p>
		
		</body>
		</html>";
		
		$headers = "From: Game Lost Details <no-reply@email.com>\r\n";
		$headers .= "Content-type: text/html\r\n";
		mail($to,$subject,$message, $headers);
		
		echo 'We sent you an email with your details.";
		
		}
	}
	}
	}
	}
	
		
}

?>

<form method="post">
	<center>
		<h1><strong>Lost Password</strong></h1>
		<p>Email:
			<input type="text" name="Email" id="Email">
			<br>
		<input type="submit" name="Send" id="Send" value="Send">
		</p>
	</center>
</form>