<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    if (!empty($_POST['honeypot'])) {
      
        
        echo "Submission is from a bot.";
    } else {
       

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

       
        $recipientEmail = 'landonsmith152003@gmail.com';
        $subject = 'Form Submission';
        $emailMessage = "Name: $name\nEmail: $email\nMessage: $message";

        if (mail($recipientEmail, $subject, $emailMessage)) {
            echo "Form submitted successfully.";
        } else {
            echo "Form submission failed. Please try again later.";
        }
    }
}
?>


