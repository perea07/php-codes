<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cuadrado - Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <h4 class="py-3">4. Haga un programa que calcule el cuadrado y el cubo de un número cualquiera.</h3>

        <div class="container py-3">
            <form action="cuadrado.php" method="POST" autocomplete="off">
                <div class="row g-2">
                    <div class="col-2">
                        <input type="text" class="p-2 border bg-light" placeholder="Ingrese un número" name="number" tittle="Ingrese un número">
                    </div>
                    
                    <div class="col-md-1 col-md-offset-3">
                        <input type="submit" class="btn btn-success py-2">
                    </div>
                </div>
            </form>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
</body>

</html>