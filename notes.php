<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
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
    <p>Tú Promedio es: <?php echo $promedio ?> </p>
</ul>



</body>
</html>