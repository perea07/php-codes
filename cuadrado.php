<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <?php

    $number = $_POST['number'];

    ?>
    

    <div class="px-5 py-4">
        <div class="card border border-primary border-5" style="width: 20rem;">
            <ul class="list-group list-group-flush">
                <p>El cuadrado del número ingresado es: <?php echo pow($number, 2);?></p>
                <p>El cubo del número ingresado es: <?php echo pow($number, 3);?></p>
            </ul>
        </div>
    </div>
</body> 
</html>