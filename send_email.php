<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer();


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = "yuliawulandari271@gmail.com";
$mail->Password = "nmcjicmsytabuawt";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Sender info 
$mail->setFrom($_POST['user_email'], $_POST['user_fullname']); 
// $mail->addReplyTo('reply@example.com', 'SenderName'); 
 
// Add a recipient 
$mail->addAddress('yuliawulandari271@gmail.com'); 
 
// Add cc or bcc  
// $mail->addCC('cc@example.com'); 
// $mail->addBCC('bcc@example.com'); 
 
// Email subject 
$mail->Subject = 'Internship Test Email'; 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Email body content 
$mailContent = $_POST['messages']; 
$mail->Body = $mailContent; 
 
// Send email 
if(!$mail->send()){ 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
}else{ 
    echo "
    <script type='text/javascript'>
               setTimeout(function () { 
                swal({
                  title: 'Success',
                  text: 'Email has been sent',
                  icon: 'success',
                  buttons: false
                }); 
               },10); 
               window.setTimeout(function(){ 
                window.location.replace('index.php?page=hrd-information');
               } ,2000); 
              </script>
              "; 
}
?>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>