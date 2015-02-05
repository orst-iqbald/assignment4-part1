<?php
ini_set('display_errors', '1')
?>

<html>
<body>
	<title> Loopback PHP </title>
</body>

<?php
	$reqcount = count($_REQUEST);
	echo count($_REQUEST);
	
	foreach($_REQUEST as $key =>$value)
	{
	echo 'Key = ' .$key.'<br />';
	echo 'Value= ' .$value;
	}

/*
	for($i=0; $i<$reqcount; $i++){
		echo "<p>";
		echo import_request_variables(g|p);
		echo "</p>";
	}
*/
?>


</html>
