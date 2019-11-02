<?php
$username = $_POST["username"];
$mode = $_POST["mode"];
$acc = $_POST["acc"];
$no_of_people = $_POST["no"];



$link = mysqli_connect("localhost", "root", "", "db_users");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if($mode == "bus"){
$trans_cost=700;
}
else if($mode == "train"){
$trans_cost=1500;
}
else{
$trans_cost=4000;
}

if($acc == "Single"){
$acc_cost=500;
}
else if($acc == "Double"){
$acc_cost=700;
}
else if($acc == "Triple"){
$acc_cost=900;
}
else{
$acc_cost=1200;
}
$tots=($trans_cost + $acc_cost)*$no_of_people;
$Packagename = 'US';

$sql = "INSERT INTO packagedesc (Username,Mode,TransCost,Accommodation,Acc_Cost,no_of_people,Total_Cost,Packagename) VALUES ('$username','$mode','$trans_cost','$acc','$acc_cost','$no_of_people','$tots','$Packagename')";
if(mysqli_query($link, $sql)){
    
    echo "<table border='1'>";
    
echo "<tr>";
echo "<th>Username</th>";
echo "<td>" . $username . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Packagename</th>";
echo "<td>" . $Packagename . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Mode</th>";
echo "<td>" . $mode . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Transportation Cost</th>";
echo "<td>" . $trans_cost . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Accommodation</th>";
echo "<td>" . $acc . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Accommodation Cost</th>";
echo "<td>" . $acc_cost . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>No of people</th>";
echo "<td>" . $no_of_people . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Total Cost</th>";
echo "<td>" . $tots . "</td>";
echo "</tr>";
echo "</table>";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>