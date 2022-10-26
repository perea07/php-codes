<?php include("nav.php"); ?>
<title>Ejercicio - 2</title> 
<?php

$x = $_POST['x'];
$y = $_POST['y'];

$expresion = pow($x, 2) + pow(10, 3) / pow($y, 3);

 ?>
<br>

  
    <div class="card col-6">
  <div class="card-body">
  <p>Z = <?php echo $expresion;?></p> 
    
  </div>
