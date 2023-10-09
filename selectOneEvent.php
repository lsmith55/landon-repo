<?php
include 'dbConnect.php';

$eventNumber = 1;  //replace with event number to test

try {
    $stmt = $pdo->prepare("SELECT * FROM wdv341_events WHERE event_id = :event_id");
    $stmt->bindParam(':event_id', $eventNumber, PDO::PARAM_INT);
    $stmt->execute();
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$event) {
        echo '<p>No event found for event ID ' . $eventNumber . '</p>';
    }
} catch (PDOException $e) {
    die('Error: ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Event Details</h1>

    <?php if ($event): ?>
        <table>
            <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Date</th>
                <th>Presenter</th>
            </tr>
            <tr>
                <td><?= $event['event_id'] ?></td>
                <td><?= $event['events_name'] ?></td>
                <td><?= $event['events_date'] ?></td>
                <td><?= $event['events_presenter'] ?></td>
            </tr>
        </table>
    <?php endif; ?>
</body>
</html>



