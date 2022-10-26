<?php include("nav.php"); ?>
<title>Ejercicio 8</title>
<body class="container">
	<h4 class="color-danger">8. Un programa que calcule los intereses de una cuenta dada si se sabe que el
		banco paga a sus usuarios el 3% mensual. El programa debe imprimir el monto
		ahorrado, los intereses causados en n meses y el total del cliente en el banco
		(dinero ahorrado + intereses).
	</h4>

	<form class="col-4 py-4" autocomplete="off" method="POST" action="interes.php">

		  <div class="form-group py-2" >
		    <label>Ingresa tú nombre:</label>
		    <input type="text" class="form-control" placeholder="Ingresa tú nombre" name="name">
		  </div>
		  <div class="form-group py-2">
		    <label>N° de cuenta</label>
		    <input type="text" class="form-control" placeholder="Ingresa el número de la cuenta" name="n_cuenta">
		  </div>

		  <div class="form-group py-2">
		    <label>Ingresa el monto:</label>
		    <input type="text" class="form-control" placeholder="Ingresa el monto" name="monto">
		  </div>
		  <div class="form-group py-2">
		    <label>Ingrea el número de meses</label>
		    <input type="text" class="form-control" placeholder="Ingresa el número de meses" name="meses">
		  </div>
		  
		  <button type="submit" class="btn btn-success">Calcular</button>
	</form>

	<?php include("footer.php"); ?>
