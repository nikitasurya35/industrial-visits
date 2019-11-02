<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Package Description</title>

<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
h2{text-align: center;
font-family: Times new roman;
}
</style>

</head>
<body background="https://pub-static.haozhaopian.net/static/web/site/features/backgrounds/images/Geometry_02_A-small-map3cea4231fb2c7a7bbc404b6510aea57d.jpg">


<h2>US Package</h2>
<p>View Package Description:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Itinerary')" id="defaultOpen">Itinerary</button>
  <button class="tablinks" onclick="openCity(event, 'Description')">Description</button>
  <!--button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button-->
</div>

<div id="Itinerary" class="tabcontent">
  <h3 style="color: green; font-family: monospace;">Day 1 of Industrial Visit</h3>
  <p style="font-family: Times new roman;">After arriving at Banglore we proceed towards our first Industry Visit of the trip. The day is spent at learning and understanding the theoretically learnt subjects.<br>
  <br>
Post satisfying our hunger, we seek the blessings of Lord Krishna at the famous ISKCON temple and get hymned in the chants!<br>
<br>
Later visit the commercial street for some shopping and spend time at leisure!</p>
<br>
<h3 style="color: green; font-family: monospace;">Day 2 of Industrial Visit</h3>
<p style="font-family: Times new roman;">Keep our date with the second Industry visit to Bangalore! Learn from the industry’s best and pick on their brains as much as you can!
<br><br>
Next up would the Vishweshwaraiah Technical Museum, Lalbaug Botanical Garden and the famous Cubbon Park!
<br><br>
<h3 style="color: green; font-family: monospace;">Day 3 of Industrial Visit</h3>
<p style="font-family: Times new roman;">After our morning chores, we head straight to Tippu Sultan’s city- Mysore! On the way visit Srirangapatanam-then capital of King Hyder Ali and his son Tippu Sultan.<br><br>

Later visit the famous 150 acres huge Brindavan Gardens and watch the beautiful fountain & light show!<br><br>

At night, catch up with the industry stalwart and have a perfect Business DinnerTM meet with them. Discuss job prospects, current industry demands or solve your subject doubt and have an excellent Industry-Institute interface.</p>
<br>
<h3 style="color: green; font-family: monospace;">Day 4 of Industrial Visit</h3>
<p style="font-family: Times new roman;">Today we visit the most iconic and famous monument of Mysore, the Mysore Palace! See the grand palace stand up with its extravaganza and get mesmerized by the beauty and grandeur of it!<br><br>

Later visit the St. Phenomena Church and Mysore Sand Sculpture Museum!<br><br>

We head back to the state’s capital and embark on our journey back home! </p>
</div>

<div id="Description" class="tabcontent">
  <h3>Description</h3>
 <div id="wrap">
        <form action="insertt.php" id="tp" name="tp" method="POST">
        <div>
            
               <fieldset>
                <legend>Book Now!</legend>
                Username: <input type="text" name="username" ><br><br>
                <label >Mode of Transport</label><br>
<div id='rates'>
                <label class='radiolabel'><input type="radio"  name="mode" value="bus" checked="checked"  />Bus-Rs.700</label><br/>
                <label class='radiolabel'><input type="radio"  name="mode" value="train"  />Train-Rs.1500</label><br/>
                <label class='radiolabel'><input type="radio"  name="mode" value="airplane"  />Airplane-Rs.4000</label><br/>
           </div>
                <br/>
                <label >Accommodation</label>
         
                <select id="acc" name="acc" >
                <option selected hidden value="">Select Room Type</option>
                <option value="Single">Single(Rs.500)</option>
                <option value="Double">Double(Rs.700)</option>
                <option value="Triple">Triple(Rs.900)</option>
                <option value="Quad">Quad(Rs.1200)</option>
               
               </select>
              <script type="text/javascript">
window.onload=function(){
location.href=document.getElementById("acc").value;
}
</script>
                <br/>
                <p>
                <label>Number of people</label>
               
                <input type="number" value="1" name="no" id="theinscription" />
                </p>
                <div id="totalPrice"></div>
               
                </fieldset>
            <div id="totalPrice"></div>
           
            
            
            <button type="submit" value="submit">Submit</button><br><br>
            
        </div>

       </form>
</div><!--End of wrap-->
</div>
<!--div id="Reviews" class="tabcontent">
  <h3>Reviews</h3>
  <p>Add review:</p><br>
  <input type="text" name="review">
</div-->
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   

</body>
</html>