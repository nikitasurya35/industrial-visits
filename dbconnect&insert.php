<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$uname = mysqli_real_escape_string($link, $_POST['uname']);
$pwd = mysqli_real_escape_string($link, $_POST['pwd']);
$mobile = mysqli_real_escape_string($link, $_POST['mobile']);
$type = mysqli_real_escape_string($link, $_POST['type']);
 
// Attempt insert query execution
$sql = "INSERT INTO signup (uname,pwd,mobile,type) VALUES ('$uname','$pwd','$mobile','$type')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
    header('Location: index.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>