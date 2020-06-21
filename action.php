<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$email_from = 'http://127.0.0.1:5500/contact.html';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Phone: $message.\n".
              "User Message: $message.\n".
              

$to = "rajdabade2104@gmail.com";

$headers = "Form: $email_from\r\n";

$headers = "Reply-To $visitor_email\r\n".

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>