<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event List</title>
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

        th, td:nth-child(2),
        th, td:nth-child(3) {
            display: none;
        }

        @media (min-width: 768px) {
            th, td:nth-child(2),
            th, td:nth-child(3) {
                display: table-cell;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Event List</h1>
    </header>
    <div class="container">
        <?php
        require_once 'dbConnect2.php';
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=landonftc3_wdv_341', 'landonftc3_wdv_341', 'Ftc152003!');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("SELECT * FROM wdv341_events");
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                echo '<table>';
                echo '<tr><th>Event</th><th>Description</th><th>Presenter</th></tr>';
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['events_name'] . '</td>';
                    echo '<td>' . $row['events_description'] . '</td>';
                    echo '<td>' . $row['events_presenter'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>No events found.</p>';
            }
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>
