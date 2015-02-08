<?php
ini_set('display_errors', '1')
?>
<!DOCTYPE html>
<html>
<head>
        <title> Multtable File </title>
</head>

<form action="multtable.php" method="POST">
<p> min-multiplicand </p> <input type="number" name="min-multiplicand"/>
<p> max-multiplicand </p> <input type="number" name="max-multiplicand"/>
<p> min-multiplier </p> <input type="number" name="min-multiplier"/>
<p> max-multiplier </p> <input type="number" name="max-multiplier"/>
<p><input type = "submit" name="submit0" value="Submit"></p>
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


$row = $maxmultiplicand-$minmultiplicand +2;
$column = $maxmultiplier - $minmultiplier +2;

$i=$minmultiplicand;
$j=$minmultiplier;


echo "<table border='1'>";
  while( $i<($maxmultiplicand+2)){
    echo "<tr>";
    $j=$minmultiplier;
      while( $j<($maxmultiplier+2)){
	  $result = $i*$j;
          echo "<td>".$result."</td>";        
      	  $j++;	
      }
    echo "</tr>";
    $i++;
  }
echo "</table>";

?>
</html>
