<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 12</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 12 - Visitantes al planeta Tierra</h2>
    <?php
    $datosNuevos = array(
        'nombre' => $_POST['nombre'],
        'planeta' => $_POST['planeta'],
    );

    $jsonString = file_get_contents('datosVisitantes.json');
    $datos = json_decode($jsonString, true);

    // Agregamos los nuevos datos al array existente
    $datos[] = $datosNuevos;

    // Guardamos el array completo en el archivo JSON
    $datosVisitantesEnJson = json_encode($datos);
    file_put_contents('datosVisitantes.json', $datosVisitantesEnJson);

    // Leer el archivo JSON y obtener los datos almacenados
    $jsonString = file_get_contents('datosVisitantes.json');
    $datos = json_decode($jsonString, true);
    // Contar la cantidad de registros
    $contador = count($datos);
    // Mostrar todos los datos almacenados
    foreach ($datos as $dato) {
        echo "Nombre: " . $dato['nombre'] . "<br> Planeta: " . $dato['planeta'] . "<br><br>";
    }
    echo "<h4>Total de registros: " . $contador . "</h4>";
    ?>

</main>
</body>
</html>

