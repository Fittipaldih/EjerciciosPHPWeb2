<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 17</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 17</h2>
    <p>

    </p>

    <?php
    include_once("Sumar.php");
    include_once("Restar.php");
    include_once("Operando.php");

    $resultado = new Sumar(
        new Restar(new Operando(5), new Operando(3)),
        new Sumar(new Operando(3), new Operando(4))
    );
    echo $resultado->resolverEcuacion();
    ?>
</main>
</body>
</html>