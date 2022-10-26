<?php include("nav.php"); ?>
<title>Ejercicio - 1</title>
<body class="container">
<?php



$name = $_POST['name'];

$note1 = $_POST['note1'];

$note2= $_POST['note2'];

$note3= $_POST['note3'];

$sum = $note1 + $note2 + $note3;

$promedio = $sum / 3;


?>

<h4 class="py-2">Hola, <?php echo $name = $_POST['name'];  ?></h4>

<ul>


    
    <li>Nota 1: <?php echo $note1 ?></li>
    <li>Nota 2: <?php echo $note2 ?></li>
    <li>Nota 3: <?php echo $note3 ?></li>
    <p><strong><?php echo "Tú promedio es: ". $promedio;  ?></strong></p>
    <?php 

        if ($promedio >= 3.5) {
            echo "<h6 class='text-success'>Aprobaste 😊</h6>";
        }else{
            echo "<h6 class='text-danger'>Reprobaste ☹️</h6>";
        }
    ?>


</ul>
