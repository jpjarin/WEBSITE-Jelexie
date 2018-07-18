<?php
ini_set('SMTP','mail.jelexie.com');
ini_set('smtp_port',465);
// Check for empty fields
if(empty($_POST['productName']) || empty($_POST['comment']))
   {
	echo "No arguments Provided!";
	return false;
   }
$productName = strip_tags(htmlspecialchars($_POST['productName']));
$comment = strip_tags(htmlspecialchars($_POST['comment']));
	
// Create the email and send the message
$to = 'h4d8e0z7w9n9u2m0@jelexie2016.slack.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "New comment for $productName";
$email_body = "You have received a new comment from Jelexie's Website comment form.\n\n"."Here are the details:\n\nProduct Name: $productName\n\nComment:\n $comment";
$headers = "From: $productName comment form\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;