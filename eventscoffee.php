<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
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

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
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

/* Style the content */
.content {
  margin-left: 200px;
  padding-left: 20px;
  
  
}

body {
  font-family: 'Poppins', sans-serif;
  color:white;
 
}

/* Style the header */
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





/* Container for flexboxes */
.row {
  display: -webkit-flex;
  display: flex;
}

/* Create three unequal columns that sits next to each other */
.column {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Left and right column */
.column.side {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   height:auto;
   width:auto;
}
.column.sider {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   height:auto;
   width:auto;
   text-align:center;
}

/* Middle column */
.column.middle {
  -webkit-flex: 2;
  -ms-flex: 2;
  flex: 2;
  height:auto;
  width:auto;
}

.img1 {
	opacity: 0.5;
	height:200px;
	width:300px;
}
ol {
	list-style:none;
	}


/* Style the footer */
.footer {
  background-color: #5C2C06;;
  padding: 10px;
  text-align: center;
}
/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}
.container1 {
  position: relative;
  text-align: center;
  color: white;
  padding:5px;
  left:25%;
}
.centered {
  position: absolute;
  top: 50%;
  right: 70%;
  transform: translate(-50%, -50%);
}
.centered2 {
  position: absolute;
  top: 50%;
  right: 70%;
  
  transform: translate(-50%, -50%);
}
</style>
</head>
<div class="header">
  <h1><span>Events</span></h1>
</div>
<body>
<div class="row">
  <div class="column side" style="background-color:#492000;"></div>
  
  <div class="column middle" style="background-color:#5C2C06;">
  <h2>Savanna’s Upcoming Events</h2>
<center>
<div class="container1">
  <img class="img1" src="chess.jpeg" width="100%" alt="chess">
  <div class="centered"><p style="font-size: 20px">Chess Nite<p style="font-size: 15px"> Every Monday evening 5:30  - 9:00 pm.</div>
</div>
<div class="container1">
  <img class="img1" src="sing.jpeg" width="100%" alt="sing">
  <div class="centered"><p style="font-size: 20px">Sunday Songwriters Songfest
  <p style="font-size: 10px">February 21 @ 4:00 pm - 7:00 pm
  <p style="font-size: 15px">Kate Macleod <p style="font-size: 10px">Award-winning Americana Songwriter
  <p style="font-size: 15px">Joel Bernstein <p style="font-size: 10px">Up & Coming Folk/Pop Songwriter</div>
</div>
<div class="container1">
<img class="img1" src="sing2.jpeg" width="612" height="408" alt="sing2">
<div class="centered2"><p style="font-size: 20px">Mark McKay<p style="font-size: 10px">singer & songwriter
<p style="font-size: 15px">Friday February 27th - 8:00 – 10:00 pm</div>
</div>
<div class="container1">
<img class="img1" src="sing3.webp" width="660" height="373" alt="sing3">
<div class="centered"><p style="font-size: 20px">The Backyard Girls<p style="font-size: 10px"> pop acoustic guitar
<p style="font-size: 15px">Friday February 27th 
<p style="font-size: 15px">8:00 – 10:00 pm</div>
</div>
</center>
</div>

  <div class="column sider" style="background-color:#492000;"><h5>Savanna’s Coffee House</h5>
		<ol>
			<li>604 24th Street</li>
			<li>St. Paul, Minnesota</li>
			<li>702-971-1154</li>
		</ol>
		<p style="font-size: 20px"><center>Hours</center>
		<ol>
			<li><p style="font-size: 15px">Sunday 7:00 am to 9 pm</li>
			<li><p style="font-size: 15px">Monday – Thursday</li>
			<li><p style="font-size: 15px">6:00 am to 10:00 pm</li>
			<li><p style="font-size: 15px">Friday 6:00 am to 11:00 pm</li>
			<li><p style="font-size: 15px">Saturday 6:30 am to 11:00 pm</li>
		</ol>
 </div>
</div>
<div id="mySidebar" class="sidebar" text-align:center>
<h2>More Info</h2>
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
  Savanna’s Coffee House:
604 24th Street St. Paul, Minnesota
702-971-1154
<div class="rightside">
<p style="font-size: 13px">
Hours
Sunday 7:00 am to 9 pm,
Monday – Thursday 6:00 am to 10:00 pm,
Friday 6:00 am to 11:00 pm,
Saturday 6:30 am to 11:00 pm,
</div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
