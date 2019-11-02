<!DOCTYPE html>
<html>
<head>
<title>US Package</title>
<style>

h1{

text-align: center;
}
p{

font-size: 28px;
text-align: center;
}
     * {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head><?php include "dbconnect.php"; ?>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "get_state.php",
	data:'stateid='+val,
	success: function(data){
		$("#city-list").html(data);
	}
	});
}
</script>
<body background="https://pub-static.haozhaopian.net/static/web/site/features/backgrounds/images/Geometry_02_A-small-map3cea4231fb2c7a7bbc404b6510aea57d.jpg">

<h1>US Package Details</h1>
<!-- Slideshow container -->
<div class="slideshow-container" align="center">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="c6.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="c6.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="c6.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<form>
<p>Available on:
<select style="width: 150px; height:50px; font-size: 20px;" onchange="javascript:location.href = this.value">
  <option value="http://localhost/ip/PackageDesc2.html">23/10/2019</option>
  <option value="http://localhost/ip/PackageDesc2.html">15/11/2019</option>
  <option value="http://localhost/ip/PackageDesc2.html">20/12/2019</option>
</select>

</p>
<label style="font-size:20px">Select Pickup City</label><br>
<label style="font-size:20px">State: </label>
<select id="state-list" name="state" class="demoInputBox" onChange="getState(this.value);">
<option value="">Select State</option>
<?php
$sql="select * from state;";
$result=$dbhandle->query($sql);
while($rs=$result->fetch_assoc()){
?>
<option value="<?php echo $rs["stateid"]; ?>"> <?php echo $rs["statename"]; ?></option>
<?php
}
?>
</select>
<label>City: </label>
<select id="city-list" name="city">
<option value="">Select City</option>
<button type=button name="book"><a href="">Book Now</button>
</form>
</p>
</body>
</html>