<?php include("nav.php"); ?>
<title>Ejercicio - 1</title>

<body>
    <h5 class="py-3 text-center">1. Capture el nombre y tres notas de un estudiante e imprimir el nombre y la nota
        promedio, así como un mensaje que indique si el alumno aprobó o reprobó, sabiendo
        que la materia se aprueba con un promedio mínimo de 3.5 (nota de 1 a 5).</h5>

    <center>
            <form action="notas.php" method="POST" autocomplete="off">
                <div class="mb-3 col-3">
                    <input type="text" class="form-control" placeholder="Ingresa tú nombre" name="name">
                </div>
                <div class="mb-3 col-3">
                    <input type="text" class="form-control" placeholder="Ingresa una nota" name="note1">
                </div>
                <div class="mb-3 col-3">
                    <input type="text" class="form-control" placeholder="Ingresa una segunda nota" name="note2">
                </div>
                <div class="mb-3 col-3">
                    <input type="text" class="form-control" placeholder="Ingresa la última nota" name="note3">
                </div>
                <div>
                    <button type="submit" class="btn btn-warning">Enviar</button>
                </div>
            </form>
    </center>
    <br>
    <br>
    <?php include("footer.php"); ?>