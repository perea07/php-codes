<?php include("nav.php"); ?>
<title>Ejercicio - 1</title>
<body class="container">
	<h3 class="py-3">1. Haga un programa que calcule el área y la circunferencia de un círculo. Si se
	sabe que las fórmulas son las siguientes:
	</h3>

	<ul>
		<li>Area = pi * Radio²</li>
		<li>Circunferencia = 2² pi * Radio</li>
	</ul>
	

	<form action="area.php" method="POST" autocomplete="off">
		<div>
			<input type="text" name="number" placeholder="Introduce un número">
		</div>
		<br>
		<div>
			<input type="submit" name="button" class="btn btn-success">
		</div>
	</form>
	<?php include("footer.php"); ?>
</body>
</html>