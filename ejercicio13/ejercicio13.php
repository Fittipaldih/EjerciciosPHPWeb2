<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 13</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 13: Conociendo INIs con el Menú no saludable</h2>
    <p>Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de
        hoy: Entrada, plato principal, acompañamiento y postre. <br>
        Una vez enviado el formulario, lea el archivo menu.ini, y muestre en pantalla sólo los pasos del menú
        que solicitó el comensal
    </p>
    <form action="procesar.php" method="post">
        <h2>Seleccione los pasos del menú de hoy:</h2>
        <input type="checkbox" name="pasos[]" value="entrada"> Entrada<br>
        <input type="checkbox" name="pasos[]" value="plato_principal"> Plato principal<br>
        <input type="checkbox" name="pasos[]" value="acompañamiento"> Acompañamiento<br>
        <input type="checkbox" name="pasos[]" value="postre"> Postre<br>
        <input type="submit" value="Enviar">
    </form>

</main>
</body>
</html>