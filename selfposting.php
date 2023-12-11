<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$confirmMessage = false;
$errors = [];

class EventManager {
    private $db;

    public function __construct() {
        // PDO connection
        $this->db = new PDO("mysql:host=localhost;dbname=landonftc3_wdv_341", "landonftc3_wdv_341", "Ftc152003!");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function uploadFile() {
        $targetDirectory = "productimage/";  
        $targetFile = $targetDirectory . basename($_FILES["eventsimage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        
        if ($_FILES["eventsimage"]["size"] > 0) {
            
            if ($_FILES["eventsimage"]["size"] > 1000000) {
                $uploadOk = 0;
                return "Sorry, your file is too large.";
            }

            
            if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
                $uploadOk = 0;
                return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            }

            
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["eventsimage"]["tmp_name"], $targetFile)) {
                    return $targetFile;  
                } else {
                    $uploadOk = 0;
                    return "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            
            return "default_image.jpg"; 
        }

        return null;
    }

    public function insertEventData($eventsName, $eventsDesc, $eventsImage, $eventsDate, $eventsTime) {
        try {
            
            $stmt = $this->db->prepare("INSERT INTO wdv341_events (events_name, events_description, events_image, events_date, events_time, events_date_inserted, events_date_updatec)
                              VALUES (:eventsName, :eventsDesc, :eventsImage, :eventsDate, :eventsTime, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");

            $stmt->bindParam(':eventsName', $eventsName);
            $stmt->bindParam(':eventsDesc', $eventsDesc);
            $stmt->bindParam(':eventsImage', $eventsImage);
            $stmt->bindParam(':eventsDate', $eventsDate);
            $stmt->bindParam(':eventsTime', $eventsTime);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}

$eventManager = new EventManager();

if (isset($_POST['submit'])) {
    // Honeypot check
    if (!empty($_POST['honeypot'])) {
        die("Honeypot detected!");
    }

    
    $inEventsName = trim($_POST['eventsname']);
    $inEventsDesc = trim($_POST['eventsdesc']);
    $inEventsDate = trim($_POST['eventsdate']);
    $inEventsTime = trim($_POST['eventstime']);

    if (empty($inEventsName)) {
        $errors[] = "Events Name is required.";
    }

    if (empty($inEventsDesc)) {
        $errors[] = "Events Description is required.";
    }

    if (empty($inEventsDate)) {
        $errors[] = "Events Date is required.";
    }

    if (empty($inEventsTime)) {
        $errors[] = "Events Time is required.";
    }

    
    if (empty($errors)) {
        
        $inEventsImage = $eventManager->uploadFile();

        
        if ($inEventsImage !== null) {
            $confirmMessage = $eventManager->insertEventData($inEventsName, $inEventsDesc, $inEventsImage, $inEventsDate, $inEventsTime);
        } else {
            $errors[] = "Error uploading file.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Items</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Jost', sans-serif;
            background-color: #5C2C06;
        }

        .header {
            background-color: #60381D;
            padding: 15px;
            text-align: center;
            font-size: 10px;
            font-weight: 500;
            width: 100%;
            margin-top: -10px;
            margin-left: -8px;
            color: #FFFFFF;
        }

        a {
            font-family: 'Jost', sans-serif;
            padding: 5px;
            margin-bottom: 10px;
            text-decoration: none;
            color: #000000;
            font-weight: 200;
        }

        h1 {
            margin: 0;
            font-weight: 500;
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
        input[type="file"],
        input[type="date"],
        input[type="time"] {
            font-family: 'Jost', sans-serif;
            padding: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #D2A073;
            color: #000000;
            border: 2px solid #000000;
            cursor: pointer;
        }

        .confirmMessage,
        .errorMessages {
            width: 500px;
            color: white;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        a {
            background-color: #D2A073;
            border: 2px solid #000000;
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="header">
    <a href="coffeehome.php">
        <h1><span>Savanna's Coffee House</span></h1>
    </a>
</div>

<?php if ($confirmMessage) : ?>
    <div class="confirmMessage">
        <h2>Thank you. We have input your information.</h2>
    </div>
<?php else : ?>
    <h2>Input form</h2>
    <?php if (!empty($errors)) : ?>
        <div class="errorMessages">
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="post" action="selfposting.php" enctype="multipart/form-data">
        <label for="eventsname">Events Name: </label>
        <input type="text" name="eventsname" id="eventsName" value="<?php echo isset($inEventsName) ? htmlspecialchars($inEventsName) : ''; ?>" required>

        <label for="eventsdesc">Events Description: </label>
        <input type="text" name="eventsdesc" id="eventsDesc" value="<?php echo isset($inEventsDesc) ? htmlspecialchars($inEventsDesc) : ''; ?>" required>

        <label for="eventsimage">Choose Event Image: </label>
        <input type="file" name="eventsimage" id="eventsImage" accept="image/*" required>

        <label for="eventsdate">Events Date: </label>
        <input type="date" name="eventsdate" id="eventsDate" value="<?php echo isset($inEventsDate) ? htmlspecialchars($inEventsDate) : ''; ?>" required>

        <label for="eventstime">Events Time: </label>
        <input type="time" name="eventstime" id="eventsTime" value="<?php echo isset($inEventsTime) ? htmlspecialchars($inEventsTime) : ''; ?>" required>

        <div style="display:none;">
            <label for="honeypot">Leave this field blank:</label>
            <input type="text" name="honeypot">
        </div>

        <p>
            <input type="submit" name="submit" value="Submit">
            <input type="reset">
        </p>
    </form>
<?php endif; ?>

</body>
</html>
