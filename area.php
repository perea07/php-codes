<?php 

$radio = $_POST['number'];

//Area
$area = pi() * pow($radio, 2);

//Circunferencia
$circunferencia = 2 * pi() * $radio;


echo "El area es: ".$area;

echo "</br>";

//Circunferencia
echo "El circunferencia es: ".$circunferencia;

 ?>
<br>
 <a href="form_area.php">Regresar</a>