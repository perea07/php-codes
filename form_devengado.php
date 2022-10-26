<?php include("nav.php"); ?>
<title>Ejercicio 6</title>

<body class="container py-3">
	<h3 class="py-3">6. Haga un programa que calcule el devengado de un empleado si se sabe su
		nombre, sueldo, prima de alimentación por $ 12,000.00 y subsidio de transporte
		por $ 9,500.00, cada concepto se paga proporcional al número de días
		trabajados
	</h3>

	<form>
		<div class="form-group py-4 col-4">
			<label>Ingresa tú nombre</label>
			<input type="text" class="form-control" placeholder="Ingresa tú nombre">
		</div>
		<div class="form-group col-4">
			<label>Ingresa el salario a calcular</label>
			<input type="text" class="form-control" placeholder="Ingresa el salario a calcular">
		</div>
		
		<div class="py-3">
		
			<button type="submit" class="btn btn-success">Calcular</button>
		</div>
	</form>

	<?php include("footer.php"); ?>
