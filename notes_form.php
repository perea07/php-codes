<?php include("nav.php"); ?>
<title>Ejercicio - 3</title>
<body>
    <h4 class="py-3 text-center">3. Haga un programa que capture el nombre y tres notas de un estudiante y luego
        imprima el nombre, las tres notas y el promedio.</h3>

        <div class="container text-center py-3">
            <form action="notes.php" method="POST" autocomplete="off">
                <div class="row g-2">
                    <div class="">
                        <input type="text" class="p-1 border bg-light" placeholder="Ingresa tú nombre" name="name" required>
                    </div>
                    <div class="">
                        <input type="text" class="p-1 border bg-light" placeholder="Ingresa una nota" name="note1" required>
                    </div>

                    <div class="">
                        <input type="text" class="p-1 border bg-light" placeholder="Ingresa otra nota" name="note2" required>
                    </div>
                    <div class=""> 
                        <input type="text" class="p-1 border bg-light" placeholder="Ingresa una ultima nota" name="note3" required>
                    </div>
                    <div class="">
                        <input type="submit" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
        <br>
        <br>
<?php include("footer.php"); ?>