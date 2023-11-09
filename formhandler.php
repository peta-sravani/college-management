<?php
$name = $_POST['name']
$visitor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$email_from = 'garamiddisravani16@gmail.com';

$email_subject = 'new from submission';

$email_body = "user name : $name.\n".
               "user email: $visitor_email.\n".
               "subject: $subject.\n".
               "user message: $message .\n";


$to = 'sravanipeta2@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>