<?php include("nav.php"); ?>
<title>Ejercicio - 7</title>
<body class="container">
	<h3 class="py-3">7. Un programa que calcule la raíz cuadrada de un número cualquiera.</h3>

	<form action="raiz.php" method="POST" autocomplete="off">
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