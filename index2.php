<?php
	$msg = "";

	if (isset($_POST['submit'])) {

		require 'phpmailer/PHPMailerAutoload.php';

		function sendemail($to, $from, $fromName, $body) {
			$mail = new PHPMailer();
			$mail->setFrom($from, $fromName);
			$mail->addAddress($to);
			$mail->Subject = 'Contact Form - Email';
			$mail->Body = $body;
			$mail->isHTML(false);

			return $mail->send();
		}

		$name = $_POST['username'];
		$email = $_POST['email'];
		$body = $_POST['body'];

	
		
		    if (sendemail('recieveremail@gmail.com', $email, $name, $body)) {
				$msg = 'Email sent!';
				sendemail('recieveremail@gmail.com',$email, $name, $body);
				sendemail('recieveremail@gmail.com',$email, $name, $body);
			} else
				$msg = 'Email failed!';
		
	}
?>
<html>
	<head>
		<title>PHP Contact Form</title>
	</head>
	<style type="text/css">
		input, textarea {
			width:250px;
			height: 27px;
			margin-bottom: 10px;
		}

		textarea {
			height: 100px;
			resize: vertical;
		}

		body {
			text-align: center;
			margin-top: 250px;
		}
	</style>
	<body>
		<img src="images/logo.png"><br><br>
		<form method="post" action="index.php" enctype="multipart/form-data">
			<input type="text"	name="username" placeholder="Name..." required><br>
			<input type="email"	name="email" placeholder="Email..." required><br>
			<textarea name="body" placeholder="Message..." required></textarea><br>
			<input type="file" name="attachment" required><br>
			<input type="submit" name="submit" value="Send Email">
		</form>
		<br><br>
		<?php echo $msg; ?>
	</body>
</html>