<?php 
$name = echo $_POST['name'];
$visitor_email = echo $_POST['email'];
$subject = echo $_POST['subject'];
$message = echo $_POST['message'];

$email_from = 'https://nishinodae.github.io/SGIS/';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Email: $message.\n";

$to = 'jiesyukri12@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>