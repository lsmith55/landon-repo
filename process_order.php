<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Assuming you have a database connection function or include it here

// Retrieve order information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["cart"])) {
    $name = $_POST["name"];
    $cartItems = $_POST["cart"];

    // Save order information to the database
    $orderId = saveOrder($name, $cartItems);

    // Display order confirmation
    if ($orderId) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Order Confirmation</title>
            <style>
                body {
                    font-family: 'Poppins', sans-serif;
                    color: white;
                    background: linear-gradient(to bottom, #5f3702, #261000);
                    text-align: center;
                    margin: 0; /* Remove default margin */
                    padding: 0; /* Remove default padding */
                    height: 100vh; /* Make the body cover the entire viewport height */
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: flex-start; /* Align content to the top */
}

                .confirmation {
                    background-color: #5C2C06;
                    padding: 20px;
                    color: white;
                    max-width: 400px;
                    margin: auto;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                }

                h2 {
                    margin-bottom: 20px;
                }

                .ordered-items {
                    text-align: left;
                    margin-top: 20px;
                }

                .ordered-items li {
                    margin-bottom: 10px;
                }
            </style>
        </head>
        <body>
            <div class="confirmation">
                <h2>Thank you for your order, <?php echo $name; ?>!</h2>
              

                <div class="ordered-items">
                    <h3>Ordered Items:</h3>
                    <ul>
                        <?php
                        foreach ($cartItems as $itemId) {
                            $itemName = getItemNameById($itemId); // Replace with your function to get item name
                            echo '<li>' . $itemName . '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </body>
        </html>
        <?php
    } else {
        echo "Failed to process the order.";
    }
} else {
    echo "Invalid request.";
}

// Function to save order information to the database
function saveOrder($name, $cartItems) {
    // Implement your database logic here
    // Insert order information into the database and return the order ID
    // Return false if the order couldn't be processed
    return rand(1000, 9999); // Placeholder, replace with actual database logic
}

// Function to get item name by ID (replace with your actual function)
function getItemNameById($itemId) {
    // Implement your database logic here
    // Return the name of the item based on the ID
    return "Item $itemId"; // Placeholder, replace with actual database logic
}
?>
