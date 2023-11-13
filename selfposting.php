<?php
$confirmMessage = false;

if(isset($_POST['submit'])) {
    // Honeypot check
    if (!empty($_POST['honeypot'])) {
        die("Honeypot detected!");
    }

    $inEventsName = $_POST['eventsname'];
    $inEventsDesc = $_POST['eventsdesc'];
    $inEventsPres = $_POST['eventspres'];
    $inEventsDate = $_POST['eventsdate'];
    $inEventsTime = $_POST['eventstime'];

    require 'dbConnect.php'; // Replace with your database connection code

    try {
        // PDO connection
        $db = new PDO("mysql:host=localhost;dbname=wdv341", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert data into the wdv341_events table
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
    <title>Document</title>
</head>
<style>
    .confirmMessage {
        width:500px;
        background-color:green;
        margin-left:auto;
        margin-right:auto;
    }
</style>
<body>
    <?php
        if ($confirmMessage) {
    ?>
        <div class="confirmMessage">
            <h2>Thank you. We have input your information.</h2>
        </div>
    <?php
        } else {
    ?>
        <h1>Input form</h1>
        <form method="post" action="selfposting.php">
            <label for="eventsname">Events Name: </label>
            <input type="text" name="eventsname" id="eventsName" required>

            <label for="eventsdesc">Events Description: </label>
            <input type="text" name="eventsdesc" id="eventsDesc" required>

            <label for="eventspres">Events Presenter: </label>
            <input type="text" name="eventspres" id="eventsPres" required>

            <label for="eventsdate">Events Date: </label>
            <input type="date" name="eventsdate" id="eventsDate" required>

            <label for="eventstime">Events Time: </label>
            <input type="time" name="eventstime" id="eventsTime" required>

            <div style="display:none;">
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
</body>
</html>