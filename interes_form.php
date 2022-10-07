<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intereses - Ejercicio 8</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
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
		    <input type="password" class="form-control" placeholder="Ingresa el número de la cuenta" name="n_cuenta">
		  </div>

		  <div class="form-group py-2">
		    <label>Ingresa el monto:</label>
		    <input type="text" class="form-control" placeholder="Ingresa el monto" name="monto">
		  </div>
		  <div class="form-group py-2">
		    <label>Ingrea el número de meses</label>
		    <input type="text" class="form-control" placeholder="Ingresa el número de meses" name="meses">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Calcular</button>
	</form>


</body>
</html>