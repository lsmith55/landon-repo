<!DOCTYPE html>
<html lang="en">
<head>
<title>About</title>
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
  background: linear-gradient(to bottom, #5f3702, #261000);
 
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
  background: linear-gradient(to bottom, #5f3702, #261000);
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
   background-image: url(houseb2.jpg);
   background-position: left;
   

}
.column.sider {
   -webkit-flex: 1;
   -ms-flex: 1;
   flex: 1;
   height:auto;

}

.column.middle {
  -webkit-flex: 1;
  -ms-flex: 1;
  flex: 3;
  height:auto;
  
}


.footer {
  background-color: #5C2C06;;
  padding: 10px;
  text-align: center;
}
ol {
	list-style:none;
	}
.img1 {
	float:right;
	border:3px solid #492000;
	padding:5px;
	margin:10px;
	margin-top:28px;
	margin-right:60px;
	}

rightside {
margin-right:10px;
}


@media (max-width: 600px) {
  .row {
    -webkit-flex-direction: column;
    flex-direction: column;
  }
}

.textdown {
margin-top:50px;
}

.img2 {
height:150px;
width:215px;
margin-top:20px;
border:3px solid #492000;
padding:5px;

}
.img3 {
height:150px;
width:215px;
margin-top:100px;
border:3px solid #492000;
padding:5px;
}
</style>
</head>


<div class="header">
  <h1><span>About Us</span></h1>
</div>
<body>

<div class="row">
  <div class="column sidel" style="background-color:#492000;"><center><img class="img2" src="imcc2.jpg" alt="imcc2"><img class="img3" src="imcc.jpg" width="1024" height="768" alt="imcc"></div></center>
  
  <div class="column middle" style="background-color:#5C2C06;">Founded was in 2006 by MSU graduate students Michel Bohmer and Sandy Thomas. Located in the heart of MSU’s campus town, Savanna’s is designed to be a funky destination.</p>
  	 <img class="img1" src="coffeeimage1.jpeg" width="300" height="200" alt="coffeeimage1">
  	 <div class="textdown">
  	 <p>We serve premium products such as</p> 
  	 <ul>
  	 	<li>Fresh roasted coffee and espresso drinks</li>
  	 	<li>Hot and cold teas</li>
  	 	<li>Grilled and cold sandwiches</li>
  	 	<li>Homemade soups</li>
  	 </ul>
  	 </div>
  	<div class="textdown">
  	 <p>Not just a daytime destination! Stop by in the evening, enjoy a glass of wine or beer and listen to some live entertainment in our connected theatre space!</div>
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
