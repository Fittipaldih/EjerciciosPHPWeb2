<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 4</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
<h2>Ejercicio 4</h2>
<p>Cree una función llamada incrementar, que reciba una variable y sin devolver nada como retorno de
    la función, el valor del parámetro haya sido incrementado en 1
    (Ver pasaje de parámetros por referencia)</p>
<form action="ejercicio4.php" method="post">
    <input type="number" name="numerito">
    <input type="submit" value="Incrementar (+1)">
</form>
<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST["numerito"];
    if (isset($a) && is_numeric($a)) {
        $a = intval($a);
        function incrementar(&$a)
            // La notación "&" antes del parámetro de una función indica que se trata de un paso por referencia en lugar de un paso por valor. Esto significa que cuando se llama a la función, se está pasando una referencia a la variable original en lugar de una copia, por lo que cualquier cambio realizado en la variable dentro de la función afectará a la variable original fuera de la función.
        {
            $a = $a + 1;
        }
        echo("El numero antes de llamar la funcion es: <br> $a <br>");
        incrementar($a);
        echo("Despues de llamar a la funcion es: <br> $a <br>");
    } else {
        echo("Debe ingresar un número válido.");
    }
}
echo("<a href='../index.php'> Volver");

?>
</main>
</body>
</html>