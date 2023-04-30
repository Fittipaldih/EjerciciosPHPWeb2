<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 3</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
<h2>Ejercicio 3: Concatenar textos</h2>
<p>Cree una función concatenar(texto1, texto2) que reciba dos textos como parámetro y devuelva
    ambos textos concatenados como uno solo.</p>
<form action="ejercicio3.php" method="get">
    <input type="text" name="texto1" placeholder="Ingrese texto 1">
    <input type="text" name="texto2" placeholder="Ingrese texto 2">
    <input type="submit" value="Concatenar">
</form>
<hr>
<?php
if(isset($_GET['texto1']) && isset($_GET['texto2'])) {
        $texto1 = $_GET["texto1"];
        $texto2 = $_GET["texto2"];

        function concatenarTexto($a, $b)
        {
            return $a . " " . $b;
        }

        echo(concatenarTexto($texto1, $texto2));
}
?>
<br>
<a href="../index.php">VOLVER</a>
</main>
</body>
</html>