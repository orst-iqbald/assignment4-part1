<?php
ini_set('display_errors', '1')
?>
<html>
<head>
        <title> Multtable File </title>
</head>

<form action="" method="post">
<p> min-multiplicand </p> <input type="number" name="min-multiplicand"/>
<p> max-multiplicand </p> <input type="number" name="max-multiplicand"/>
<p> min-multiplier </p> <input type="number" name="min-multiplier"/>
<p> max-multiplier </p> <input type="number" name="max-multiplier"/>
<p><input type = "submit" value="Submit"></p>
</form>


<?php
// creating of variable name
$minmultiplicand = $_POST['min-multiplicand'];
$maxmultiplicand = $_POST['max-multiplicand'];
$minmultiplier = $_POST['min-multiplier']; 
$maxmultiplier = $_POST['max-multiplier'];

if($minmultiplicand>=$maxmultiplicand)
  echo "miminum larger than max";
else
  echo '1';

if($minmultiplier>=$maxmultiplier)
  echo "min larger than max";
else
  echo '1';

if(is_numeric($minmultiplicand))
  echo "an integer";

$row = $maxmultiplicand-$minmultiplicand +2;
$column = $maxmultiplier - $minmultiplier +2;

echo "<table border='0'>";
  for($i=0; $i<$row; $i++){
    echo "<tr>";
      for($j=0; $j<$column; $j++){
	  $result = $minmultiplicand*$minmultiplier;
          echo "<td>".$result."</td>";        
      $minmultiplier=$minmultiplier+1;	
      }
    $minmultiplicand = $minmultiplicand+1;
    echo "</tr>";
  }
echo "</table>";

?>
</html>
