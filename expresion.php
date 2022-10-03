<?php 

$x = $_POST['x'];
$y = $_POST['y'];

$expresion = pow($x, 2) + pow(10, 3) / pow($y, 3);

echo "Z: ".$expresion;

echo "</br>";
 ?>
<br>
 <a href="form_expresion_aritmetica.php">Regresar</a>