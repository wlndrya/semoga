<?php
 include('assets/PHPMailer-master/src/Exception.php');
 include('assets/PHPMailer-master/src/PHPMailer.php');
 include('assets/PHPMailer-master/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'yuliawulandari271@gmail.com';
$mail->Password = '020701281072wulanibu';
$mail->setFrom('yuliawulandari271@gmail.com', 'Mrs. Yulia');
$mail->addAddress('pinkmylovely@gmail.com', 'Mrs. Seo');
if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
$mail->Subject = 'PHPMailer contact form';
$mail->isHTML(false);
$mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
if (!$mail->send()) {
$msg = 'Sorry, something went wrong. Please try again later.';
} else {
$msg = 'Message sent! Thanks for contacting us.';
}
} else {
$msg = 'Share it with us!';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact form</title>
</head>
<body>
<h1>Do You Have Anything in Mind?</h1>
<?php if (!empty($msg)) {
echo "<h2>$msg</h2>";
} ?>
<form method="POST">
<label for="name">Name: <input type="text" name="name" id="name"></label><br><br>
<label for="email">Email: <input type="email" name="email" id="email"></label><br><br>
<label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br><br>
<input type="submit" value="Send">
</form>
</body>
</html>