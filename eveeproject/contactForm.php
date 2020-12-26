<?php
	$name = $_POST['name'];
	$visitorsEmail = $_POST['email'];
	$message = $_POST['message'];


	$email_from = 'EveeArtstation@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $visitorsEmail.\n".
						"User Message: $message.\n";

	$to = "dummybunny09@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitorsEmail \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: contact.html");



?>