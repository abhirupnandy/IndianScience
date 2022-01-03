<?php
	header("Refresh:5; url=index.php");



	$secretKey = '6Ld4MXkdAAAAAAz21ln1UVfzQlCoEbFQ5fIyozQm';
	$captcha = $_POST['g-recaptcha-response'];

	if(!$captcha){
		echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
		exit;
	}

	$ip = $_SERVER['REMOTE_ADDR'];
	$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
	$responseKeys = json_decode($response,true);

	if(intval($responseKeys["success"]) !== 1) {
		echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
	}


	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	/* Exception class. */
	require 'PHPMailer/src/Exception.php';
	/* The main PHPMailer class. */
	require 'PHPMailer/src/PHPMailer.php';
	/* SMTP class, needed if you want to use SMTP. */
	require 'PHPMailer/src/SMTP.php';
	$mail = new PHPMailer(TRUE);
	//$mail->setFrom('darth@empire.com', 'Darth Vader');
	//$mail->addAddress('palpatine@empire.com', 'Emperor');
	$from = $_POST['email'];
	$name = $_POST['name'];
	$sub = $_POST['subject'];
	$body = $_POST['body'];
	$mail->setFrom('info@indianscience.net', 'Feedback Form');
	$mail->addAddress($from);
	$mail->addBCC('info@indianscience.net');
	$mail->Subject = $sub;
	$mail->Body = $body;
	/* SMTP parameters. */
	/* Tells PHPMailer to use SMTP. */
	$mail->isSMTP();
	/* SMTP server address. */
	$mail->Host = 'mail.indianscience.net';
	/* Use SMTP authentication. */
	$mail->SMTPAuth = TRUE;
	/* Set the encryption system. */
	$mail->SMTPSecure = 'ssl';
	/* SMTP authentication username. */
	$mail->Username = 'info@indianscience.net';
	/* SMTP authentication password. */
	$mail->Password = 'social@123';
	/* Set the SMTP port. */
	$mail->Port = 465;

	$success_text = "<h1>Your feedback has been registered !</h1><br>
<h2>A copy of the feedback has been sent to your email.</h2><br>
<h2>Taking you back to in 5 seconds.</h2>";
	try {
		/* Finally send the mail. */
		$mail->send();
		echo $success_text;
		die;
	} catch (Exception $e) {
		echo $e->errorMessage();
	} catch (\Exception $e) {
		echo $e->getMessage();
	}


	/* recaptcha
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// access


		# FIX: Replace this email with recipient email
		$mail_to = "demo@gmail.com";

		# Sender Data
		$subject = trim($_POST["subject"]);
		$name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["name"])));
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$phone = trim($_POST["phone"]);
		$message = trim($_POST["message"]);

		if ( empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($phone) OR empty($subject) OR empty($message)) {
			# Set a 400 (bad request) response code and exit.
			http_response_code(400);
			echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
			exit;
		}

		$ip = $_SERVER['REMOTE_ADDR'];
		$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
		$responseKeys = json_decode($response,true);

		if(intval($responseKeys["success"]) !== 1) {
			echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
		} else {
			# Mail Content
			$content = "Name: $name\n";
			$content .= "Email: $email\n\n";
			$content .= "Phone: $phone\n";
			$content .= "Message:\n$message\n";

			# email headers.
			$headers = "From: $name <$email>";

			# Send the email.
			$success = mail($mail_to, $subject, $content, $headers);
			if ($success) {
				# Set a 200 (okay) response code.
				http_response_code(200);
				echo '<p class="alert alert-success">Thank You! Your message has been sent.</p>';
			} else {
				# Set a 500 (internal server error) response code.
				http_response_code(500);
				echo '<p class="alert alert-warning">Oops! Something went wrong, we couldnt send your message.</p>';
			}
		}

	} else {
		# Not a POST request, set a 403 (forbidden) response code.
		http_response_code(403);
		echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
	}*/

	?>
