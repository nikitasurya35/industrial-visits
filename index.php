<!DOCTYPE html>
<html>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<style type="text/css">
  * {box-sizing:border-box}
/* Slideshow container */
.slideshow-container {
  max-width: 1250px;
  
  position: relative;
  margin: auto;
  
}
/* Hide the images by default */
.mySlides {
  display: none;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
* {
  box-sizing: border-box;
}
body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}
/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}
h1 {
  font-size: 50px;
  word-break: break-all;
}
.row {
  margin: 8px -16px;
}
/* Add padding BETWEEN each column (if you want) */
.row,
.row > .column {
  padding: 11px;
}
/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}
/* Clear floats after rows */
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Content */
.content {
  background-color: white;
  padding: 10px;
}
/* Position the navbar container inside the image */
.container1 {
  position: absolute;
  margin: 0px;
  /*width: auto*/;
  position: relative;
  text-align: center;
  color: transparent;
  font-family:"Times New Roman",Times, sans-serif;
  font-size: 25px;
}
/* The navbar */
.topnav {
  overflow: hidden;
  background-color: #333;
}
.topnav1 {
  overflow: hidden;
  background-color: #333;
}
/* Navbar links */
.topnav1 a {
  float: left;
  color: white;
  text-align: center;
  padding: 0px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 0px 0px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
/* Bordered form */
form {
  border: 3px solid #f1f1f1;
}
/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 14px;
  margin: 0px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}
/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
/* Add padding to containers */
.containerr {
  padding: 16px;
}
/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 400px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 35px;
}
/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5px auto; /* 15% from the top and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button */
.close {
  /* Position it in the top right corner outside of the modal */
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
/* Close button on hover */
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}
@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
}
@keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
}
/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
</style>
</head>
<body>
  <!-- Slideshow container -->
<div class="slideshow-container">
  <!--div class="container"-->
    <div class="centered">
    <h1 style="color:white;" style="font-style:bold; "> INDUSTRIAL VISITS </h1></div>
      <div class="topnav">
          <a href="#home"><button style.display='block'>Home</button></a>
          <a href="#login"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a>
      <!--a href="#contact"><button style.display='block'>Contact</button></a-->
          <a href="#about"><button style.display='block'>About Us</button></a>
          <a href="logout.php"><button style.display='block'>Logout</button></a>
          <a href="#"><h2 align="left">hello, User <!--?php echo $_SESSION['uname']; ?--></h2></a-->
          
      </div>
      <div class="topnav1">
      <p style="font-size: 40px; color: white; font-style: bold; font-family: Times New Roman;" align="left">INDUSTRIAL VISITS AND PLANNING</p>
      <p style="color: white;">Now plan your visit online.</p>
    </div>

      <!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="log1.php" method="post">
    

    <div class="containerr">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="pwd"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <select name="type" name="">
        <option value="admin" name="admin">admin</option>
        <option value="user" name="user">user</option>
      </select>
      <br>
      <br>

      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="containerr" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="http://localhost/ip/signup1.php">sign up
      </button></a>
      <!--span class="psw">Forgot <a href="#">password?</a></span-->
    </div>
  </form>
</div>

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <!--div class="numbertext">1 / 3</div-->
    <img src="c5.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <!--div class="numbertext">2 / 3</div-->
    <img src="c6.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <!--div class="numbertext">3 / 3</div-->
    <img src="c8.jpg" style="width:100%">
  </div>
</div>
<br>
<br>



<!-- MAIN (Center website) -->
<div class="main">

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="c1.jpg" alt="" style="width:100%"><a href="http://localhost/ip/Package2.php"><h3> US</h3></a>
      <!--p>Lorem ipsum..</p-->
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="c3.jpg" alt="" style="width:100%"><a href="http://localhost/ip/Package.php"><h3>Banglore-Mysore</h3></a>
      <!--p>Lorem ipsum..</p-->
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="c5.jpg" alt="" style="width:100%">
      <h3> place 2</h3>
      <!--p>Lorem ipsum..</p-->
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="c6.jpg" alt="visit" style="width:100%">
      <h3>place 3</h3>
      <!--p>Lorem ipsum..</p-->
    </div>
  </div>
</div>
  <br>
  <br>
  <br>
  
  
<h1 style="text-align: center; font-style: bold; font-size: 35px; padding: 20px"><a  name="about"> ABOUT US </a></h1>
<p style="padding-top: 0px; padding-right: 20px; padding-left: 20px;padding-bottom: 20px; font-style: bold; font-size: 25px; font-family: Times New Roman; text-align: center;">
  Industry Visit Tour System is a specific web based reservation system designed to make it easier for people or college to book industrial tour packages online. The system allows the user to check various travel destinations and choose his destination accordingly. 

  contact:abc@gmail.com
</p>
</div>

<script type="text/javascript">
  var slideIndex = 0;
  showSlides();
function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
</body>
</html>