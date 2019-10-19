<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "db_users");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
session_start();
 
if(isset($_REQUEST['uname']))
{
	$uname = mysqli_real_escape_string($link, $_REQUEST['uname']);
	$pwd = mysqli_real_escape_string($link, $_REQUEST['pwd']);
	$type = mysqli_real_escape_string($link, $_REQUEST['type']);

	$sql = mysqli_query($link,"SELECT * FROM signup WHERE uname='$uname'AND pwd='$pwd' AND type='$type'");
	$count=mysqli_num_rows($sql);
	$res=mysqli_fetch_assoc($sql);


	if($count==1)
	{
    	while($res)
    	{
    		if($res["type"]=="user")
    		{
    			$_SESSION["uname"]=$uname;
    			header("Location: dashboard.php");
    		}

    		if($res["type"]=="admin")
    		{
    			$_SESSION["uname"]=$uname;
    			header("Location: admin.php");
    		}

    	}
    }
    else
    {
    	echo "entered wrong information ";
    	exit();
    }	
	
}
// Escape user inputs for security

 
// Attempt insert query execution

 
// Close connection
mysqli_close($link);
?>