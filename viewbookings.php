<!DOCTYPE html>
<html>
<head><title>View Bookings</title>
<style type="text/css">
table {
border-collapse: collapse;
width: 100%;
color: #d96459;
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
font-size: 20px;
text-align: left;
}
th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #4CAF50;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
tr:hover {background-color: #ddd;}
</style>
</head>
<body>
<h1 style="color: SlateBlue;"><b><u>Bookings</b></u></h1>
<table>
<tr>
<th>Username</th>
<th>Mode</th>
<th>Transportation Cost</th>
<th>Accommodation</th>
<th>Accommodation Cost</th>
<th>No. of people</th>
<th>Total Cost</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","db_users");
if($conn->connect_error){
die("Connection failed:".$conn-> connect_error);
}
$sql="select * from packagedesc;";
$result=$conn->query($sql);

if($result-> num_rows>0) {
 while($row = $result-> fetch_assoc()){
echo "<tr><td>". $row["Username"] ."</td><td>". $row["Mode"] ."</td><td>". $row["TransCost"] ."</td><td>". $row["Accommodation"] ."</td><td>". $row["Acc_Cost"] ."</td><td>". $row["no_of_people"] ."</td><td>". $row["Total_Cost"] ."</td></tr>";
}
echo "</table>";
}
else{
echo "0 result";
}
$conn->close();
?>
</table>
</body>
</html>




