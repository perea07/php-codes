<?php include("nav.php"); ?>
<title>Ejercicio 4</title>
<body class="container">
    <h4 class="py-3">4. Haga un programa que calcule el cuadrado y el cubo de un número cualquiera.</h3>

        <div class="container py-3">
            <form action="cuadrado.php" method="POST" autocomplete="off">
                <div class="row g-2">
                    <div class="col-2">
                        <input type="text" class="p-2 border bg-light" placeholder="Ingrese un número" name="number" tittle="Ingrese un número">
                    </div>
                    
                    <div class="col-md-1 col-md-offset-3 px-5">
                        <input type="submit" class="btn btn-success py-2">
                    </div>
                </div>
            </form>
        </div>
        <?php include("footer.php"); ?>

</body>
</html>