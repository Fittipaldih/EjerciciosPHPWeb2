<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 10</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 10: Insta-reciclado</h2>
    <p>
        Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que
        contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde
        efectivamente se muestre dicha imagen.
    </p>
    <?php
    $archivos = scandir("../imagenes/");
    foreach ($archivos as $archivo) {
        // Excluir los archivos "." y ".." (Directorio actual y directorio padre)
        if ($archivo != "." && $archivo != "..") {
            echo "<div>
            <a href='../imagenes/$archivo'>$archivo</a>
           </div>";
        }
    }
    ?>
</main>
</body>
</html>