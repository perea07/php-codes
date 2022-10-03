<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];

echo "Suma: ". $number1  + $number2."</br>";
echo "Resta: ". $number1  - $number2."</br>";
echo "Multiplicación: ". $number1  * $number2."</br>";
echo "División: ". $number1  / $number2."</br>";



?>
<br>
<a href="form.php">Regresar</a>
</body>
</html>