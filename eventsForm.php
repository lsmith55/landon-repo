<?php
$confirmMessage = false;

if(isset($_POST['submit'])) {
    // Honeypot field
    if (!empty($_POST['honeypot'])) {
        die("Honeypot detected!");
    }

    $inEventsName = $_POST['eventsname'];
    $inEventsDesc = $_POST['eventsdesc'];
    $inEventsPres = $_POST['eventspres'];
    $inEventsDate = $_POST['eventsdate'];
    $inEventsTime = $_POST['eventstime'];

    require 'dbConnect.php';  

    try {
        // pdo connection
        $db = new PDO("mysql:host=localhost;dbname=wdv341", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $db->prepare("INSERT INTO wdv341_events (events_name, events_description, events_presenter, events_date, events_time, events_date_inserted, events_date_updatec)
                              VALUES (:eventsName, :eventsDesc, :eventsPres, :eventsDate, :eventsTime, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");

        $stmt->bindParam(':eventsName', $inEventsName);
        $stmt->bindParam(':eventsDesc', $inEventsDesc);
        $stmt->bindParam(':eventsPres', $inEventsPres);
        $stmt->bindParam(':eventsDate', $inEventsDate);
        $stmt->bindParam(':eventsTime', $inEventsTime);

        $stmt->execute();

        $confirmMessage = true;
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .confirmMessage {
            width: 100%;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            if ($confirmMessage) {
        ?>
            <div class="confirmMessage">
                <h2>Thank you. We have input your information.</h2>
            </div>
        <?php
            } else {
        ?>
            <h1>Event Input Form</h1>
            <form method="post" action="eventsForm.php">
                <label for="eventsname">Events Name:</label>
                <input type="text" name="eventsname" id="eventsName" required>

                <label for="eventsdesc">Events Description:</label>
                <input type="text" name="eventsdesc" id="eventsDesc" required>

                <label for="eventspres">Events Presenter:</label>
                <input type="text" name="eventspres" id="eventsPres" required>

                <label for="eventsdate">Events Date:</label>
                <input type="date" name="eventsdate" id="eventsDate" required>

                <label for="eventstime">Events Time:</label>
                <input type="time" name="eventstime" id="eventsTime" required>

                <div class="hidden">
                    <label for="honeypot">Leave this field blank:</label>
                    <input type="text" name="honeypot">
                </div>

                <p>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset">
                </p>
            </form>
        <?php
            }
        ?>
    </div>
</body>
</html>
