<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$host = 'localhost';      // Hostname
$database = 'wdv341';    // Database name
$username = 'root';  // Database username
$password = '';  // Database password

try {
    
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
    echo "Connected successfully!";
} catch (PDOException $e) {
   
    echo "Connection failed: " . $e->getMessage();
}
?>

</body>
</html>