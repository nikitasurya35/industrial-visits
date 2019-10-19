<?php
$dbhandle = mysqli_connect("localhost", "root", "", "db_users");
 
if($dbhandle === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>