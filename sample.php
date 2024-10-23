<?php
require('./config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('./PHPMailer/src/PHPMailer.php');
require('./PHPMailer/src/Exception.php');
require('./PHPMailer/src/SMTP.php');

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = $SMTP_SERVER; // Set the SMTP server to send through
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_USERNAME; // SMTP username
    $mail->Password   = $SMTP_PASSWORD; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // SSL
    $mail->Port       = $SMTP_PORT; // TCP port to connect to

    // Recipients
    $mail->setFrom($SMTP_SENDER_ADDRESS, 'Mailer');
    $mail->addAddress($TEST_RECIEVE_MAIL, 'Recipient Name'); // Add a recipient

    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "Message has been sent to {$TEST_RECIEVE_MAIL}";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
