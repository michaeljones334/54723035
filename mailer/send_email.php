<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {

    $emailTo = $_POST['emailTo'];

    try {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->isSMTP(true);
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'michaeljones.83638@gmail.com';
        $mail->Password   = 'bklqscvpxjptteoc'; // Consider using environment variables for sensitive info
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('michaeljones.83638@gmail.com', 'A GIFT FOR YOU');
        $mail->addAddress($emailTo);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'A SPECIAL DONATION GIFTED TO YOU';
        $mail->Body    = '<h1>Hello Dear,<br>A Donation has been made to you, contact jeffdenzos211@outlook.com for more information. <br>
        Thanks </h1>';

        //Send email
        $mail->send();

        // Show success message using alert
        echo '<script type="text/javascript">
                alert("Message has been sent successfully.");
                window.location.href = "index.php"; // Redirect to index.php after alert
              </script>';

    } catch (Exception $e) {
        // In case of error, show error message
        echo '<script type="text/javascript">
                alert("Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '");
              </script>';
    }
}
?>
