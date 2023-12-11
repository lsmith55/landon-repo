<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Form Handler</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
			background-color: blanchedalmond;
        }

        .confirmation {
            width: 600px;
            margin: auto;
            background-color: rgb(255, 243, 196);
            padding: 20px;
			box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            font-family: Georgia, 'Times New Roman', Times, serif;
            line-height: 20px;
        }
    </style>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["honeypot"])) {
        echo "<p>Form submission is invalid.</p>";
    } else {
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $schoolName = $_POST["school_name"];
        $customerEmail = $_POST["customer_email"];
        $academicStanding = $_POST["academic_standing"];
        $selectedMajor = $_POST["selected_major"];
        $contactOptions = isset($_POST["contact_options"]) ? $_POST["contact_options"] : [];
        $comments = $_POST["comments"];

        echo "<div class='confirmation'>";
        echo "<p>Thank you $firstName $lastName</p>";
        echo "<p>A signup confirmation has been sent to $customerEmail. Thank you for your support!</p>";

        // Additional processing logic can be added here if needed.

        echo "</div>";
    }
} else {
    echo "<p>Form submission is invalid.</p>";
}
?>
</body>
</html>