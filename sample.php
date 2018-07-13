<?php
$to = 'jpvirayjarin@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: your@sample-address.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}