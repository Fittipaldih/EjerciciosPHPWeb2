<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 11</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 11</h2>
<h2>Resultado del lanzamiento:</h2>
<?php
if (isset($_POST['cantidadDados'])) {
    $cantidadDados = $_POST['cantidadDados'];
    $puntajeTotal = 0;
    for ($i = 1; $i <= $cantidadDados; $i++) {
        $dadoNum = rand(1, 6);
        $puntajeTotal += $dadoNum;
        echo "<img src='imagenes/dado$dadoNum.png' alt='Dado'>";
    }
    echo "<h3>Resultado obtenido: $puntajeTotal</h3>";
} else {
    echo "Error: Lanzamiento inválido";
}
?>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>