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
    <h2>Ejercicio 11: Lanzar dados</h2>
    <p>
        Realizar una web que permita indicar la cantidad de dados a lanzar (mediante input de tipo option) y
        al tocar un botón “lanzar dados” pase a una segunda pantalla donde muestre los dados lanzados
        como imagen y la suma de sus valores como puntaje obtenido.
    </p>
    <form action="dados.php" method="post" enctype="multipart/form-data">
        <label for="cantidadDados">Cantidad de dados:</label>
        <select name="cantidadDados" id="cantidadDados">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <input type="submit" value="Lanzar dados">
    </form>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>