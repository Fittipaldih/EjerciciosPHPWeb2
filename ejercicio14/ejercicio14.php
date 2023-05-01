<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 14</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 14: La Matrix… digo, Matriz</h2>
    <p>
        Solicite mediante un formulario, la dimensión de una matriz cuadrada.
        En la siguiente página, cree esa matriz de NxN y realice las siguientes acciones: <br>
        a) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
        diagonal principal (1,12,23,etc)<br>
        b) Recorrer la matriz con un sólo FOR y mostrar en pantalla los valores que componen la
        diagonal secundaria (10,19,28,etc)<br>
        c) Recorra la matriz (Ahora si con 2 for) y sume todos los valores que contiene. Muestre el
        resultado
    </p>
    <form action="matriz.php" method="post">
        <label for="dimension">Dimensión de la matriz:</label>
        <input type="number" name="dimension" id="dimension" max="6" required placeholder="Ingrese la dimension...">
        <input type="submit" value="Crear Matriz">
    </form>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>