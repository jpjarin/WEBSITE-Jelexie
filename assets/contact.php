<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');
// require '/PHPMailer/src/Exception.php';
// require '/PHPMailer/src/PHPMailer.php';
// require '/PHPMailer/src/SMTP.php';

$name = addslashes(strip_tags($_POST['name']));
$email_address = addslashes(strip_tags($_POST['email']));
$subject = addslashes(strip_tags($_POST['subject']));
$message = addslashes(strip_tags($_POST['message']));
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
    $mail->Body    = '

    <html>
     <head>
    </head>
    <body>
    <style type="text/css">
    .mainBox{width:100%; text-align:center; }
    .mailBody{border-radius:5px; box-shadow:-1px 2px 8px 0px #333; 
    -webkit-box-shadow:-1px 2px 8px 0px #333;-moz-box-shadow:-1px 2px 8px 0px #333; border-top:5px solid #b42927; 
    margin:10px auto;background:#fff; padding:20px; width:560px;}
    .gotoBtn{height:50px; border: 2px solid #ee6600;  border-radius: 50px;  padding: 0 4em;  margin-top: 30px;  font-family:"Bago", Arial, sans-serif;  font-size: 1.2em;  font-weight: normal;  background-color: transparent;  color: #ee6600;}

    </style>
    <div class="mainBox">
    <div class="mailBody">
    <p style="text-align:center;">You have received a new message from <b>WWW.JELEXIE.COM</b> contact form.</p>
    <p style="text-align: left;">
        Here are the details:<br><br>
        Sender: <b>{$name}</b>
        <br>
        Email: <b>{$email_address}</b>
        <br><br>
        Message:<br>
        {$message}
    </p>

     </div>
     </div>
     </body>
    </html>
';

    $mail->AltBody = "You have received a new message from WWW.JELEXIE.COM website contact form.\n\n"."Here are the details:\n\nName: {$name}\n\nEmail: {$name}\n\nMessage:\n{$name}";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


?>