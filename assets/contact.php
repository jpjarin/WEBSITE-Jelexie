<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');
// require '/PHPMailer/src/Exception.php';
// require '/PHPMailer/src/PHPMailer.php';
// require '/PHPMailer/src/SMTP.php';

if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['subject'])         ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
 $mail = new PHPMailer\PHPMailer\PHPMailer();

                             // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.jelexie.com';  // Specify main and backup SMTP servers
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'marketing@jelexie.com';                 // SMTP username
    $mail->Password = 'jvp9999';                           // SMTP password
    
    

    //Recipients
    $mail->setFrom('website@jelexie.com','WWW.JELEXIE.COM');
    $mail->addAddress("q7j6e0e4j6n9g9c8@jelexie2016.slack.com");
    $mail->addAddress("h4d8e0z7w9n9u2m0@jelexie2016.slack.com");
    $mail->addAddress("x0w1u6z5r2k5h7q8@jelexie2016.slack.com");
    $mail->addAddress("y6w7z7x6q6p4p4e9@jelexie2016.slack.com");     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "New {$subject} from {$name}";
    $mail->Body    = "You have received a new message from <b>WWW.JELEXIE.COM</b> website contact form.<br><br>"
        ."Here are the details:<br><br>
        Name: <b>{$name}</b>
        <br><br>
        Email: <b>{$email_address}</b><br>
        <br>
        Message:<br>
        {$message}";

    $mail->AltBody = "You have received a new message from WWW.JELEXIE.COM website contact form.\n\n"."Here are the details:\n\nName: {$name}\n\nEmail: {$name}\n\nMessage:\n{$name}";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>