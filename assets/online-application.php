<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');
// require '/PHPMailer/src/Exception.php';
// require '/PHPMailer/src/PHPMailer.php';
// require '/PHPMailer/src/SMTP.php';

 //check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        $output = json_encode(array( //create JSON data
            'type'=>'error',
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    }

    //Sanitize input data using PHP filter_var().
    $name      = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email_address   = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $position         = filter_var($_POST["position"], FILTER_SANITIZE_STRING);

    //Textbox Validation 
    if(strlen($name)<4){ // If length is less than 4 it will output JSON error.
        $output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
        die($output);
    }
    $file_attached = false;
    if(isset($_FILES['resume'])) //check uploaded file
    {
        //get file details we need
        $file_tmp_name    = $_FILES['resume']['tmp_name'];
        $file_name        = $_FILES['resume']['name'];
        $file_size        = $_FILES['resume']['size'];
        $file_type        = $_FILES['resume']['type'];
        $file_error       = $_FILES['resume']['error'];


 
        //exit script and output error if we encounter any
        if($file_error>0)
        {
            $mymsg = array(
            1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini",
            2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form",
            3=>"The uploaded file was only partially uploaded",
            4=>"No file was uploaded",
            6=>"Missing a temporary folder" );
             
            $output = json_encode(array('type'=>'error', 'text' => $mymsg[$file_error]));
            die($output);
        }
         
        //read from the uploaded file & base64_encode content for the mail
        $handle = fopen($file_tmp_name, "r");
        $content = fread($handle, $file_size);
        fclose($handle);
        $encoded_content = chunk_split(base64_encode($content));
        //now we know we have the file for attachment, set $file_attached to true
        $file_attached = true;
   
    }

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = 587;  
$mail->Username = "marketing@jelexie.com";
$mail->Password = "jvp9999";
$mail->Host     = "mail.jelexie.com";
$mail->Mailer   = "smtp";
$mail->SetFrom($_POST["email"], $_POST["name"]);
$mail->AddReplyTo($_POST["email"], $_POST["name"]);
$mail->AddAddress("jpjarin.marketing@jelexie.com"); 


