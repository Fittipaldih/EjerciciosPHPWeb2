<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 9</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 9: Insta-gramo</h2>
    <p>
        Realizar una web que muestre todas las imágenes que contiene en la carpeta “/imagenes” con su
        respectivo nombre de archivo como pié de imagen. Al final de dicha web debe haber un formulario
        que permita subir una imagen con un nombre a designar.</p>
    <p>- Tip: Luego de cargar la imagen, debe volver a la misma página, sin tener que tocar links “volver” o
        cosas similares (Como en todo insta-gramo!)</p>
    </p>- Tip: Para facilitar la resolución, tener 3 imágenes cargadas en la carpeta
    </p>
    <?php
    // Obtener un array con el nombre de todos los archivos en la carpeta de imágenes y recorro con foreach
    $archivos = scandir("../imagenes/");
    foreach ($archivos as $archivo) {
    // Excluir los archivos "." y ".." (Directorio actual y directorio padre)
        if ($archivo != "." && $archivo != "..") {
            echo "<img src='../imagenes/$archivo' alt='$archivo'><br>";
    // Con EXPLODE separo el String en dos partes cuando esta el . Entonces evito mostrar la extension del archivo
            $nombre = explode(".", $archivo);
            echo "$nombre[0]<br><br>";
        }
    }
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="archivo">Selecciona una imagen:</label>
        <input type="file" name="archivo" id="archivo"><br><br>
        <label for="nombre">Nombre de la imagen:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre..."><br><br>
        <input type="submit" value="Publicar">
    </form>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>