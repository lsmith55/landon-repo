<?php
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();


if (isset($_GET['db_connection'])) {
    $conn = unserialize(urldecode($_GET['db_connection']));
    if ($conn) {
        // Close the database connection
        mysqli_close($conn);
    }
}


header("Location: login.php");  
exit();
?>
