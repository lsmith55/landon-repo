<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Jost', sans-serif;
        }
        .header {
            background-color: #60381D;
            padding: 15px; 
            text-align: center;
            font-size: 10px;
            font-weight: 200;
            width: 100%;
            margin-top: -10px;
            margin-left: -8px;
            color: #FFFFFF; 
        }
       
        h1 {
            margin: 0; 
            font-weight: 200; 
            color: #FFFFFF;
        }
        h2 {
            font-family: 'Jost', sans-serif;
            padding: 3px;
            margin: 0; 
            font-size: 35px;
            font-weight: 200;
            color: #FFFFFF;
            margin-right: 10px; 
        }
        form {
            font-family: 'Jost', sans-serif;
            color: #FFFFFF;
            display: inline-block; 
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #FFFFFF;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"],
        a {
            font-family: 'Jost', sans-serif;
            padding: 5px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #000000;
            font-weight: 200;
        }
        input[type="submit"],
        a {
            background-color: #D2A073; 
            border: 2px solid #000000; 
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            font-size:15px;
        }
        body {
            background-color:#5C2C06;
        }
    </style>
</head>
<body>

<div class="header">
<a href="coffeehome.php">Savanna's Coffee Home</a>
</div>


<?php
session_start();
include('dbConnect2.php');

if (isset($_SESSION['validUser']) && $_SESSION['validUser'] === true) {
    displayAdminOptions();
} else {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $validUsername = 'wdv341';
        $validPassword = 'wdv341';
        if ($username === $validUsername && $password === $validPassword) {
            $_SESSION['validUser'] = true;
            echo '<p style="color: green;">Login successful!</p>';
            displayAdminOptions();
        } else {
            echo '<p style="color: red;">Invalid username or password. Please try again.</p>';
            displayLoginForm();
        }
    } else {
        displayLoginForm();
    }
}

function displayLoginForm()
{
    echo '
        <h2>Hello!</h2>
        <h2>Sign in to access the admin tools</h2>
        <form method="post" action="login.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            
            <input type="submit" value="Login">
        </form>
    ';
}

function displayAdminOptions()
{
    echo '
        <h1>Welcome!</h1>
        <h2>Admin tools</h2>
        <a href="selfposting.php">Add New Product</a>
        <a href="events.php">Show List of Products</a>
        <a href="logout.php">Logout</a>
    ';
}
?>

</body>
</html>
