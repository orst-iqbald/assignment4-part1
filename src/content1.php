<?php
session_start();
if(session_status() == PHP_SESSION_ACTIVE) 
{
	if($_POST['username'] == NULL)
	{
    	echo " You need to enter in a username. Click below to return to login sceen. ";
    	session_destroy();
	echo "<a href=login.php> Return to login </a>";
//	header("Location:login.php");
//	session_destroy();
	}
} 
  
if(isset($_POST['username']))
{
 	$_SESSION['username'] = $_POST['username'];
 	$_SESSION['visits']=$_SESSION['visits'] + 1;
}        
if($_POST['username'] != NULL){
     	if (isset($_SESSION['username'])) {
                echo "Hello " . $_SESSION['username']. " You have visited " . $_SESSION ["visits"]. " times! Click to <a href=content2.php> logout </a>"; 
	}
	if($_SESSION['username'] == NULL && $_SESSION['visits']>1){
		header ("Location:login.php");
	}
}
	
?>      


<html>
 <head>
  <title>Content1 PHP Page</title>
 </head>
</html>



