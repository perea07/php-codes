<?php include("nav.php"); ?>
<title>Ejercicio 8</title>
<?php 


$name = $_POST['name'];
$n_cuenta = $_POST['n_cuenta'];
$monto = $_POST['monto'];
$meses = $_POST['meses'];


$intereses = $monto * 3 * $meses;
$saldo = $intereses + $monto;

 ?>

<div class="py-3">
	<div class="card">
		<div class="card-header">
			Bienvenid@
		</div>
		<div class="card-body">
			<h5 class="card-title">
				<?php echo $name; ?>
			</h5>
			<p>
				<?php echo  "Tú número de cuenta es :" .$n_cuenta; ?>
			</p>
			<p class="card-text">
			<ul>
				<li>Monto:
					<?php echo $monto ?>
				</li>
				<li>Meses:
					<?php echo $meses ?>
				</li>

				<li><strong>Tus intereses son: </strong>
					<?php echo "$ ". $intereses ?>
				</li>
				<li><strong>Saldo con intereses:</strong>
					<?php echo "$ ". $saldo ?>
				</li>
			</ul>
			</p>
			<a href="interes_form.php" class="btn btn-primary">Regresar</a>
		</div>
	</div>
</div>

<?php include("footer.php"); ?>