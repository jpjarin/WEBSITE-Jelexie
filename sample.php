<?php
// ini_set('SMTP','smtp.gmail.com');
// ini_set('smtp_port',465);
$to = 'h4d8e0z7w9n9u2m0@jelexie2016.slack.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@sample-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}