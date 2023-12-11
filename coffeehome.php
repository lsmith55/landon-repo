<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
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
  padding: 16px;
  background-color:#5C2C06;
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
 
}


.header {
  background-color: #7B3F00;
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
h2{
text-align:center;
}

h6{
text-align:center;
margin-top:210px;
}

h5{
text-align:center;
margin-top:50px;
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
   
}
.column.sider {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   height:auto;
}


.column.middle {
  -webkit-flex: 2;
  -ms-flex: 2;
  flex: 2;
  height:auto;
}

.txtmargin {
margin:20px;
}



.footer {
  background-color: #5C2C06;
  padding: 10px;
  text-align: center;
}

@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}

 .col1 {
	border:5px #5C2C06;
	
}
 .col2 {
	border:5px #5C2C06;
	float:right;
	margin-top:-250px;
	
}
.img1 {
	opacity: 0.5;
	height:160px;
	width:230px;
	border: 5px solid black;
	margin-top:30px;
	float:left;
}
.img2 {
	float:right;
	border: 5px solid black;
	margin:10px;
	margin-top:3px;
	margin-right:90px;
	opacity: 0.5;
	}
  .sign-in-button {
    position: fixed;
    top: 10px;
    right: 10px;
    padding: 10px 15px;
    background-color: #D2A073;
    color: #000000;
    border: 2px solid #000000;
    text-decoration: none;
    font-size: 16px;
    font-weight: 300;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
    }

    .sign-in-button:hover {
        background-color: #000000;
        color: #D2A073;
    }
</style>
</head>
<div class="header">
  <h1><span>Savanna's Coffee House</span></h1>

</div>
<body>
  
  
<div class="row">
  <div class="column sidel" style="background-color:#492000;">
  <div class="txtmargin">
  Founded was in 2006 by MSU graduate students Michel Bohmer and Sandy Thomas. Located in the heart of MSU’s campus town, Savanna’s is designed to be a funky destination. We serve premium products such as fresh roasted coffee and espresso drinks, hot and cold teas, grilled and cold sandwiches, and homemade soups. Not just a daytime destination! Stop by in the evening, enjoy a glass of wine or beer and listen to some live entertainment in our connected theatre space!</div>
  </div>
  <div class="column middle" style="background-color:#5C2C06;">
  <h2>Hey, Thanks For Stopping By!</h2>
  <p style="font-size: 15px">Here's What's Going On This Week
  <div class="col1">
  	<p style="font-size: 15px">Chess Nite
	<p style="font-size: 12px">Every Monday evening 5:30 - 9:00 pm.
	<p style="font-size: 15px">Sunday Songwriters Songfest
	<p style="font-size: 12px">February 21 @ 4:00 pm - 7:00 pm
	<p style="font-size: 12px">Kate Macleod
	<p style="font-size: 12px">Joel Bernstein
	</div>
	<img class="img1" src="chess.jpeg" width="100%" alt="chess">
  
<div class="col2">
<p style="font-size: 15px">Located at 604 24th Street St. Paul, Minnesota
<p style="font-size: 15px">Call us at 702-971-1154
<p style="font-size: 20px">Hours
<p style="font-size: 15px">Sunday 7:00 am to 9 pm
<p style="font-size: 15px">Monday – Thursday 6:00 am to 10:00 pm
<p style="font-size: 15px">Friday - 6:00 am to 11:00 pm
<p style="font-size: 15px">Saturday - 6:30 am to 11:00 pm
</div>
<img class="img2" src="coffeeimage1.jpeg" width="245" height="165" alt="coffeeimage1">
  </div>
  <div class="column sider" style="background-color:#492000;">
   <p style="font-size: 20px">Popular Menu Items This Month
  <h4>Sandwiches</h4>
  <p style="font-size: 15px">Black Russian Reuben - $6.99
  <p style="font-size: 15px">Panini Italiano - $6.99
  <p style="font-size: 15px">East Street Chicken Salad  - $6.99
  <h4><b>Coffee & Beverages</b></h4>
  <p style="font-size: 15px">Hot Chocolate
  <p style="font-size: 15px">Chai Tea
  <p style="font-size: 15px">Frappe
  <h4>Wine</h4>
  <p style="font-size: 15px">California Cellars Varietals
<p style="font-size: 15px">Chardonnay
<p style="font-size: 15px">Pinot Grigio
  
  
  
  
  </div>
</div>
<div id="mySidebar" class="sidebar" text-align:center>
<h2>More!</h2>
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
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


</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
