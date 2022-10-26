<?php include("nav.php"); ?>
<title>Ejercicio - 4</title>
<body>
    <?php

    $number = $_POST['number'];

    ?>
    

    <div class="px-5 py-4">
        <div class="card border border-5 border-dark" style="width: 20rem;">
            <ul class="list-group list-group-flush">
                <p>El cuadrado del número ingresado es: <?php echo pow($number, 2);?></p>
                <p>El cubo del número ingresado es: <?php echo pow($number, 3);?></p>
            </ul>
        </div>
    </div>
</body> 
</html>