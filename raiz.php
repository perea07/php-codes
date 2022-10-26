<?php include("nav.php"); ?>
<title>Ejercicio - 7</title>
<?php 
$number = $_POST['number'];

//raíz
$raiz = sqrt($number);
?>


<div class="card col-6">
  <div class="card-body">
    <?php echo "Raíz de: ". $number. " es : " ."<strong>$raiz</strong>"; ?>
    <?php echo "</br>";?>
  </div>
</div>
<?php include("footer.php"); ?>