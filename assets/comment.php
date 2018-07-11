<?php
// Check for empty fields
// if(empty($_POST['productName'])  		||
//    empty($_POST['comment']))
//    {
// 	echo "No arguments Provided!";
// 	return false;
//    }
	
$productName = "sample";
$comment = "sample";
	
// Create the email and send the message
$to = 'jarinjanpaolo@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Jelexie Website Visitor's comment for $productName :";
$email_body = "You have received a new comment from Jelexie's Website.\n\n"."Here are the details:\n\nProduct Name: $productName\n\nComment: $comment";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
return true;