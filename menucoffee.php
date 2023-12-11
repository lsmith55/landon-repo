<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to get events from the database
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

// Function to get event details by ID
function getEventById($eventId) {
    $host = "localhost";
    $username = "landonftc3_wdv_341";
    $password = "Ftc152003!";
    $database = "landonftc3_wdv_341";
    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM wdv341_events WHERE event_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $eventId);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();

    $conn->close();

    return $result;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["resetCart"])) {
    
    session_start();

    
    unset($_SESSION["cart"]);
    
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["eventId"])) {
    $eventId = $_POST["eventId"];
    $cartItem = getEventById($eventId);

    
    session_start();

    
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = [];
    }

    
    $_SESSION["cart"][] = $cartItem;
}

$result = getEventsFromDatabase();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
  .order-form {
            display: none;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            margin-top: 20px;
        }

        .order-form label {
            display: block;
            margin-bottom: 10px;
        }

        .order-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        .order-form button {
            background-color: #111;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
  .cart-section {
    text-align: center;
    margin: 20px auto; 
    max-width: 600px; 
    padding: 20px;
    
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); 
}

#cart-items {
    list-style: none;
    padding: 0;
}

#cart-items li {
    margin-bottom: 10px;
}

#reset-cart-btn {
    font-size: 20px;
    cursor: pointer;
    background-color: #111;
    color: white;
    padding: 10px 15px;
    border: none;
    margin-top: 20px;
}
* {
  box-sizing: border-box;
}
.column.sidel {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: auto;
    margin-left: 7px;
    border-right-style: solid;
}

.column.middle {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: auto;
    width: auto;
    border-right-style: solid;
    border-color: 2px #492000;
}

.column.middle2 {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    height: auto;
    width: auto;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
  
}

.sidebar a:hover {
  color: black;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 10px;
  
}


@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.wrapper {
    display: flex;
    width: 100%;
}

#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    z-index: 999;
    background: black;
    color: #fff;
    transition: all 0.3s;
    padding:20px;

}
a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}


.content {
  margin-left: 200px;
  padding-left: 20px;
  
  
}

body {
  font-family: 'Poppins', sans-serif;
  color:white;
  background: linear-gradient(to bottom, #5f3702, #261000);
 
}

.header {
  
  padding: 35px;
  text-align: center;
  font-size: 35px;
  background-image: url(cof.jpg);
}  
h1 {
    text-align: center; 
}
h1 span { 
    background-color: #C4A484;
    padding: 12px; 
    border-radius: 25px;
}

.row {
  display: -webkit-flex;
  display: flex;
}


.column {
  padding: 10px;
  height: 300px; 
}


.column.sidel {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   height:auto;
   margin-left:7px;
   border-right-style: solid;
   
   
   

   

}


.column.middle {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: .75;
  height:auto;
  width:auto;
  border-right-style: solid;
  border-color: 2px #492000;
  
  
}
.column.middle2 {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 2;
  height:auto;
  width:auto;
  

  
  }

.footer {
 
  padding: 20px;
  text-align: center;
}

@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
h2{
padding:auto;
margin: auto;
}

h6{
text-align:center;
margin-top:210px;
}

h5{
text-align:center;
margin-top:50px;
}
ol {
	list-style:none;
	}
.img1 {
height:150px;
width:215px;
margin-top:76px;
border:3px solid #492000;
padding:5px;
float:right;

}
.img2 {
height:150px;
width:215px;
margin-top:60px;
border:3px solid #492000;
padding:5px;
float:left;

}
.img3 {
height:150px;
width:215px;
margin-top:60px;
border:3px solid #492000;
padding:5px;
float:center;
margin-left:26px;
}
.menu-container {
            display: flex;
            flex-direction: column; 
            padding: 20px;
        }

        .menu {
            background-color: #5C2C06;
            padding: 20px;
            color: white;
            margin-bottom: 10px; 
        }

        .menu h4 {
            margin-bottom: 10px;
        }

        .more-info-btn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
            margin-top: 10px; 
        }

        .menu-image {
            max-width: 100px; 
            max-height: 100px; 
            float: left;
            margin-right: 20px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
        }

</style>
</head>
    
<script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('orderButton').addEventListener('click', function () {
                
                document.getElementById('orderForm').style.display = 'block';
            });
        });
    </script>
</head>

<body>

<div class="header">
    <h1><span>Menu</span></h1>
</div>

<div class="menu-container">
    <?php
    while ($row = $result->fetch_assoc()) {
        echo '<div class="menu" style="background-color:#5C2C06;">';
        echo '<div class="img-container">';
        echo '<img src="' . $row['events_image'] . '" alt="' . $row['events_name'] . '" class="menu-image">';
        echo '</div>';
        echo '<div>';
        echo '<h4>' . $row['events_name'] . '</h4>';
        echo '<p style="font-size: 15px">' . $row['events_description'] . '</p>';
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="eventId" value="' . $row['event_id'] . '">';
        echo '<input type="submit" class="more-info-btn" value="Add to Cart">';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>


<div class="cart-section">
    <h2>Shopping Cart</h2>
    <ul id="cart-items">
        <?php
        
        if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {
            foreach ($_SESSION["cart"] as $cartItem) {
                echo '<li>' . $cartItem['events_name'] . '</li>';
            }
        }
        ?>
    </ul>

    
    <form action="" method="post">
        <input type="hidden" name="resetCart" value="true">
        <input type="submit" id="reset-cart-btn" value="Reset Cart">
    </form>

    
    <div class="order-form" id="orderForm">
        <h2>Order Information</h2>
        <form action="process_order.php" method="post">
            <label for="name">Name:</label>
            <input type="text" name="name" required>

            
            <?php foreach ($_SESSION['cart'] as $item) : ?>
                <input type="hidden" name="cart[]" value="<?php echo $item['event_id']; ?>">
            <?php endforeach; ?>

            <button type="submit">Submit Order</button>
        </form>
    </div>

   
    <button id="orderButton">Order</button>
</div>


<div id="mySidebar" class="sidebar" text-align:center>
<h2>More Info</h2>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>
  <a class="btn btn-outline-success btn-sm m-3" href="coffeehome.php">Home</a>
  <a class="btn btn-outline-success btn-sm m-3" href="menucoffee.php">Menu</a>
  <a class="btn btn-outline-success btn-sm m-3" href="eventscoffee.php">Events</a>
  <a class="btn btn-outline-success btn-sm m-3" href="contactcoffee.php">Contact</a>
  <a class="btn btn-outline-success btn-sm m-3" href="aboutcoffee.php">About</a>
  <a class="btn btn-outline-success btn-sm m-3" href="login.php">Login</a>
<h6>savanna's coffee house</h6>
</div>



<div id="main">
  <button class="openbtn" onclick="openNav()">☰ More Info!</button>  

</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<div class="footer">
	<p style="font-size: 13px">
  <p>&copy; <?php echo date('2021'); ?> Savanna's Coffee Shop. All rights reserved.</p>
  Savanna's Coffee House:
604 24th Street St. Paul, Minnesota
702-971-1154
<div class="rightside">
<p style="font-size: 13px">
Hours
Sunday 7:00 am to 9 pm,
Monday - Thursday 6:00 am to 10:00 pm,
Friday 6:00 am to 11:00 pm,
Saturday 6:30 am to 11:00 pm,
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>


</html>








