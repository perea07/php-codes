<?php 


$name = $_POST['name'];
$n_cuenta = $_POST['n_cuenta'];
$monto = $_POST['monto'];
$meses = $_POST['meses'];


$intereses = $monto * 3 * $meses / 1200;
$saldo = $intereses + $monto;



 ?>

 <h3>Hola,<?php echo $name; ?></h3>

 <p>Tú número de cuenta es: <?php echo $n_cuenta; ?></p>

 <ul>
 	<li>Monto: <?php echo $monto ?></li>
 	<li>Meses: <?php echo $meses ?> </li>
 </ul>

 <p><strong>Tus intereses son: </strong><?php echo "$ ". $intereses ?></p>
 <p><strong>Saldo con intereses:</strong> <?php echo "$ ". $saldo ?></p>