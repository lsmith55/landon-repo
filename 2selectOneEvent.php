<?php
include 'dbConnect2.php';

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <header>
        <h1>Event Details</h1>
    </header>
    <div class="container">
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
    </div>
</body>
</html>
