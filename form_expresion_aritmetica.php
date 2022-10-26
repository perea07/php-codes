<?php include("nav.php"); ?>
<title>Ejercicio 2</title>
<body class="container">
	<h3 class="py-3">2. Haga un programa que evalúe la siguiente expresión aritmética: </h3>
	<img src="./img/expresion.png" title="img expresion">

	<form action="expresion.php" method="POST" autocomplete="off">
		<div>
			<input type="text" name="x" placeholder="Introduce el valor de x" title="valor de x">
		</div>
		<br>
		<div>
			<input type="text" name="y" placeholder="Introduce el valor de y" title="valor de y">
		</div>
		<br>
		<div>
			<input type="submit" name="button" class="btn btn-success">
		</div>
	</form>
	<?php include("footer.php"); ?>
</body>
</html>