<?php
session_start();
?>

<html>
	<head> Content 1.PHP page</head>
<body>

<?php

if(!isset($_SESSION['use']))
{
	header("Location:Login.php");
}
	echo $_SESSION['use'];
	echo "Login Success";
	echo "<a href=content2.php'>Logout</a>";


?>

</body>
</html>
