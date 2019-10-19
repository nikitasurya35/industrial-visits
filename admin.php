<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

div {
  padding-bottom: 70px;
}
/* Position the navbar container inside the image */
.container {
  position: absolute;
  margin: 0px;
  width: auto;
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

/* Navbar links */
.topnav a {
  float: right;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
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

.content{
  position: absolute;
  width: inherit;
  height: auto;
  top: 50%;
  transform: translateY(-50%);
  text-align: center;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #4CAF50;} /* Green */
</style>
<body>
  <div class="container">
  <div class="centered">
      <h1 style="color:white;" style="font-style:bold; "> INDUSTRIAL VISITS </h1></div>
    <div class="topnav">
     <a href="http://localhost/ip/home.php"><button style.display='block'>Home</button></a>
      <a href="#login"><button onclick="document.getElementById('id01').style.display='block'">Login</button></a>
      <!--a href="#contact"><button style.display='block'>Contact</button></a-->
      <a href="#"><h2>hello, <?php echo strip_tags($_SESSION['uname']); ?></h2></a>
      <a href="logout.php"><h3 align="left">logout</h3></a>
    </div>
  </div>
</div>
<div class="container">
  <div class="centered">
      <h1 style="color:black;" style="font-style:bold; "> Welcome Admin! </h1></div>
    </div>
  </div>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="log1.php">

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
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<button class="button button2"><a href="http://localhost/ip/abc.php">Add Package</button></a>
<button class="button button2"><a href="http://localhost/ip/viewbookings.php">View Bookings</button></a>


</body>
</html>