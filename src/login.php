<?php 

session_start();
if(isset($_SESSON['use'])){
	header("Location:content1.php");
}
if(isset($_POST['login']))
{
	$username= $_POST['username'];
	$_SESSION['use'] =$username;
	header("Location:content1.php");
}
else
{
	echo "You need to enter in a username";
}
?>

<html>
<head>
        <title> Login.Pph File </title>
</head>

<form action="" method="post">
<p> User name </p> <input type="text" name="username"/>
<p><input type = "submit" name="login" value="login"></p>
</form>
</html>
