
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form Handler</title>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["honeypot"])) {
        echo "<p>Form submission is invalid.</p>";
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $recipientEmail = 'landonsmith152003@gmail.com';
        $subject = 'Form Submission';
        $emailMessage = "Name: $name\nEmail: $email\nMessage: $message";

        echo "<div class='confirmation'>";
        echo "<p>Thank you $name</p>";
        echo "<p>A signup confirmation has been sent to $email.</p>";

        

        echo "</div>";
    }
} else {
    echo "<p>Form submission is invalid.</p>";
}
?>
</body>
</html>