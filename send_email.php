<?php
// $user_email=$_POST['user_email']; //Email Pengirim
$user_fullname=$_POST['user_fullname']; //Nama Lengkap Pengirim
$penerima="pinkmylovely@gmail.com"; //Email Penerima
$subject=$_POST['subject']; //Subject Email 
$messages=$_POST['messages']; //Pesan Email

$to=$penerima;

$messages="From:$user_fullname <br />".$messages;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
// $headers .= 'From: Internship Management System <noreply@yourwebsite.com>'."\r\n" . 'Reply-To: '.$user_fullname.' <'.$user_email.'>'."\r\n";
// $headers .= 'Cc: admin@yourdomain.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$subject,$messages);
if(@mail)
{
echo "Email sent successfully !!";	
}
?>