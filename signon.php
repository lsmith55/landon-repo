<?php
session_start();
include('dbConnect.php');


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
        <form method="post" action="signon.php">
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
        <h1>Welcome to the Admin Page</h1>
        <ul>
            <li><a href="add_event.php">Add New Event</a></li>
            <li><a href="list_events.php">Show List of Events</a></li>
            <li>Update and Delete options for each event</li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    ';
}
?>
