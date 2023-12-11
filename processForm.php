<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST["send"])) {

    $mail = new PHPMailer(true);

    
    $mail->isSMTP();                                // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';          // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                       // Enable SMTP authentication
    $mail->Username   = 'landonsmith152003@gmail.com';   
    $mail->Password   = 'albkmcgtdoseuncj';        
    $mail->SMTPSecure = 'ssl';                      
    $mail->Port       = 465;                        

    // Recipients
    $mail->setFrom($_POST["email"], $_POST["name"]);    // Sender Email and name
    $mail->addAddress('landonsmith152003@gmail.com');     // Add a recipient email
    $mail->addReplyTo($_POST["email"], $_POST["name"]);  // Reply to sender email

    // Add sender's email for a copy
    $mail->addAddress($_POST["email"]); // Add sender's email for a copy

    // Content
    $mail->isHTML(true);                 // Set email format to HTML
    $mail->Subject = $_POST["subject"];  // Email subject headings
    $mail->Body    = $_POST["message"];  // Email message

    // Attempt to send the email
    try {
        $mail->send();
        echo "
            <script> 
                alert('Message was sent successfully!');
                document.location.href = 'sent.html';
            </script>
        ";
    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>
