<?php

$fname = $_POST["fname"];
$email = $_POST["email"];
$message = $_POST["message"];


/* Form data's recipient */
$email2 = "admin@theperfectcup.com";

$subject = "Message from The Perfect Kitchen website.";

if (strlen($fname) > 50) {
    echo 'fname_long';
} elseif (strlen($fname) < 2) {
    echo 'fname_short';
} elseif (strlen($email) > 50) {
    echo 'email_long';
} elseif (strlen($email) < 2) {
    echo 'email_short';
}  elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';
} elseif (strlen($message) > 500) {
    echo 'message_long';
} elseif (strlen($message) < 2) {
    echo 'message_short';
} else {

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';     //  smtp server you use.
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@theperfectcup.com';      // Your smtp username/email address.
    $mail->Password = 'XXXXX';          // Your smtp password.
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;      // port number of your smtp server.

    $mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('admin@theperfectcup.com');      // any extra recipient of form data. written in parenthesis and separated by a comma.

    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AltBody = 'this is the body in plain text for non-html mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }

}

?>