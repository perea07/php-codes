<?php include("nav.php"); ?>
<title>Ejercicio - 5</title>
<body class="container">
	<h3 class="py-3">5. Haga un programa que pida el costo de un artículo y la cantidad de dinero que
		entrega el cliente e imprima el cambio que se debe entregar al mismo.</h3>

	<form class="col-6" action="producto.php" method="POST">
		<div class="mb-3">
		  <label class="form-label">Ingrese el costo del producto</label>
		  <input type="number" class="form-control" placeholder="Ingrese el costo del producto" name="coste">
		</div>
		<div class="mb-3">
		  <label class="form-label">Ingrese el dinero para pagar</label>
		  <input class="form-control" type="number" name="dinero" placeholder="Ingrese el dinero para pagar">
		</div>
		<div class="mb-3">
			<input type="submit" value="Enviar" class="btn btn-success">
		</div>
	</form>
	<?php include("footer.php"); ?>