<?php

$host = "localhost";
$username = "landonftc3_wdv_341";
$password = "Ftc152003!";
$database = "landonftc3_wdv_341";
$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $event_id = $_POST["event_id"];

   
    $sql = "DELETE FROM wdv341_events WHERE event_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $event_id);
    $stmt->execute();

    
    if ($stmt->affected_rows > 0) {
        header("Location: events2.php?message=success");
    } else {
        header("Location: events2.php?message=error");
    }

    
    $stmt->close();
}


$conn->close();
?>
