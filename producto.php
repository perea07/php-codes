<?php include("nav.php"); ?>
<title>Ejercicio - 5</title>

<?php 
$costo = $_POST['coste'];
$dinero = $_POST['dinero'];


$resultado = $dinero - $costo;

 ?>

<body class="container py-5">
	 <div class="w-25 py-5">
	 	<h3 class="border "><?php echo "Cambio: $". $resultado; ?></h3>
	 </div>
</body>
</html>