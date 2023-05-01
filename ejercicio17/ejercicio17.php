
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 17</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 17: Calcula Doris</h2>
    <p>Crear los objetos Operando, Sumar, Restar. Todos deben responder al método
        resolverEcuacion()</p>
<?php
include_once ('Sumar.php');
include_once('Restar.php');
include_once('Operando.php');
include_once('Multiplicar.php');
include_once('Dividir.php');

if( empty($_GET["error"] )){
    $resultado = new Dividir( new Multiplicar(new Sumar(
        new Restar(new Operando(7), new Operando(8)),
        new Sumar(new Operando(2), new Operando(2))
    ), new Sumar(
        new Restar(new Operando(4), new Operando(1)),
        new Sumar(new Operando(5), new Operando(4))
    )), new Operando(2));

    echo $resultado->mostrarEcuacion() . " = " . $resultado->resolverEcuacion();
} else {
    echo "hubo un error";
}
?><br>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>
