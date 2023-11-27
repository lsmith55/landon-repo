<?php
session_start();


$_SESSION = array();

session_destroy();


if (isset($_GET['db_connection'])) {
    $conn = unserialize(urldecode($_GET['db_connection']));
    if ($conn) {
        
        mysqli_close($conn);
    }
}


header("Location: signon2.php");  
exit();
?>
