<?php

session_start();
if($_SESSION['username'] ==NULL){
	header ("Location:login.php");
	session_destroy();
	}
else{
 	echo "You have logged out click to return to <a href=login.php> Login </a>";
	session_destroy();
	}
?>
