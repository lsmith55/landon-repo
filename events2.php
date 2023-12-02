<?php

function getEventsFromDatabase() {
    $host = "localhost";
    $username = "landonftc3_wdv_341";
    $password = "Ftc152003!";
    $database = "landonftc3_wdv_341";
    $conn = new mysqli($host, $username, $password, $database);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "SELECT * FROM wdv341_events";
    $result = $conn->query($sql);

    
    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    
    $conn->close();

    return $result;
}


$result = getEventsFromDatabase();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div>';
        echo '<h3>' . $row['events_name'] . '</h3>';
        echo '<p><strong>Description:</strong> ' . $row['events_description'] . '</p>';
        echo '<p><strong>Presenter:</strong> ' . $row['events_presenter'] . '</p>';
        echo '<p><strong>Date:</strong> ' . $row['events_date'] . '</p>';
        echo '<p><strong>Time:</strong> ' . $row['events_time'] . '</p>';
        echo '<form method="post" action="delete-event2.php">';
        echo '<input type="hidden" name="event_id" value="' . $row['events_id'] . '">';
        echo '<input type="submit" value="Delete">';
        echo '</form>';
        echo '</div>';
    }
} else {
    echo '<p>No events found</p>';
}
?>
