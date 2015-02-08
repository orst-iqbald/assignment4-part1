<?php
ini_set('display_errors', '1')
?>

<html>
<body>
	<title> Loopback PHP </title>
</body>

<?php

	
	foreach($_REQUEST as $key =>$value)
	{
	echo "<p>";
	echo 'Key = ' .$key.'<br />';
	echo 'Value= ' .$value;
	echo "JSON code below"
	$jsoncode = json_encode($_REQUEST);
	echo $jsoncode;
	echo "</p>";
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
