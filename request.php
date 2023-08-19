<?php




date_default_timezone_set('Etc/UTC');

// Edit this path if PHPMailer is in a different location.
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

/*
 * Server Configuration
 */

$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
$mail->Username = "travelonelk@gmail.com"; // Your Gmail address.
$mail->Password = "hgHJHGF654@hg"; // Your Gmail login password or App Specific Password.

/*
 * Message Configuration
 */

$mail->setFrom('travelonelk@gmail.com', 'travelonelk.com'); // Set the sender of the message.
$mail->addAddress('mdkrangana@gmail.com', 'travelonelk'); // Set the recipient of the message.
$mail->Subject = 'New enquiry received'; // The subject of the message.

/*
 * Message Content - Choose simple text or HTML email
 */
$msg = "";
foreach ($_POST as $param_name => $param_val) {
    $msg = $msg . "$param_name : $param_val\n";
} 
// Choose to send either a simple text email...
$mail->Body = $msg; // Set a plain text body.

// ... or send an email with HTML.
//$mail->msgHTML(file_get_contents('contents.html'));
// Optional when using HTML: Set an alternative plain text message for email clients who prefer that.
//$mail->AltBody = 'This is a plain-text message body'; 

if ($mail->send()) {
    echo "Thank You! We will contact you shortly!";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
}



?>