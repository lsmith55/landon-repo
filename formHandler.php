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
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $schoolName = $_POST["school_name"];
        $customerEmail = $_POST["customer_email"];
        $academicStanding = $_POST["academic_standing"];
        $selectedMajor = $_POST["selected_major"];
        $contactOptions = $_POST["contact_options"];
        $comments = $_POST["comments"];

        echo "<div class='confirmation'>";
        echo "<p>Dear $firstName,</p>";
        echo "<p>Thank you for your interest in DMACC.</p>";
        echo "<p>We have you listed as an academic standing starting this fall: $academicStanding.</p>";
        echo "<p>You have declared $selectedMajor as your major.</p>";

        echo "<p>Based upon your responses, we will provide the following information in our confirmation email to you at $customerEmail:</p>";

        if (!empty($contactOptions)) {
            echo "<ul>";
            foreach ($contactOptions as $option) {
                echo "<li>$option</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No contact options selected.</p>";
        }

        if (!empty($comments)) {
            echo "<p>You have shared the following comments which we will review:</p>";
            echo "<p>$comments</p>";
        } else {
            echo "<p>No comments provided.</p>";
        }

        echo "</div>";
    } else {
        echo "<p>Form submission is invalid.</p>";
    }
    ?>
</body>
</html>

