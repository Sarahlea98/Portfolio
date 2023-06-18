<?php
// Set the recipient email address
$to = 'sarahlea1998@gmail.com';

// Get the form fields
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the email subject
$subject = 'Contact Form Submission';

// Set the email headers
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

// Compose the email body
$body = "<p><strong>Name:</strong> $name</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Message:</strong> $message</p>";

// Send the email using Gmail's SMTP server
$smtpHost = 'smtp.gmail.com';
$smtpPort = 587;
$smtpUsername = 'sarahlea1998@gmail.com';
$smtpPassword = 'vbhvjzmhtytavcfv';

// Configure PHPMailer
require 'C:\wamp64\www\Portfolio\vendor\autoload.php';
require 'C:\wamp64\www\Portfolio\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\wamp64\www\Portfolio\vendor\phpmailer\phpmailer\src\Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(); // Create a new instance of PHPMailer

$mail->isSMTP();
$mail->Host = $smtpHost;
$mail->Port = $smtpPort;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;

$mail->setFrom($email, $name);
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->msgHTML($body);

// Send the email
if (!$mail->send()) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully';
}
?>
