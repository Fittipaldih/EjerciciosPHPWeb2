<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 13</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 13</h2>
    <?php

    if (isset($_POST['pasos'])) {
        $pasosSeleccionados = $_POST['pasos'];
        $menu = parse_ini_file('menu.ini', true);

        echo "<h2>Seleccionó los siguientes pasos:</h2>";

        foreach ($pasosSeleccionados as $paso) {
            if (isset($menu[$paso])) {
                echo $menu[$paso]['nombre'] . ": ";
                echo $menu[$paso]['descripcion'] . "<br>";
            }
        }
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