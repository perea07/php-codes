<?php include("nav.php"); ?>
<title>Ejercicio - 2</title>
<?php 
$radio = $_POST['number'];

//Area
$area = pi() * pow($radio, 2);

//Circunferencia
$circunferencia = 2 * pi() * $radio;

echo "</br>";



?>


<div class="card col-6">
  <div class="card-body">
    <?php echo "La circunferencia es: ".$circunferencia; ?>
    <?php echo "</br>";?>
    <?php echo  "El area es: ".$area;  ?>
   
  </div>
</div>


