<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 15</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 15: Buscando una palabra en un pajar, más bien en un String</h2>
    <p>
        Crear una función que reciba una palabra a buscar y un texto, y devuelva cuantas ocurrencias hubo
        de la misma. Recorrer el texto String caracter a caracter sin utilizar funciones de String, la firma de la
        función será similar a: buscar(clave, texto)
    </p>
    <?php
    function buscar($buscada, $texto) {
        $repetido = 0;
        $longitudPalabra = strlen($buscada);
        $longitudTexto = strlen($texto);
        // Recorrer el texto caracter a caracter
        for ($i = 0; $i < $longitudTexto; $i++) {
            // Verificar si se encontró la primer letra de la palabra buscada
            if ($texto[$i] == $buscada[0]) {
                $encontrado = true;
                // Comprobar si los caracteres siguientes también coinciden con la clave
                for ($j = 1; $j < $longitudPalabra; $j++) {
                    if ($texto[$i + $j] != $buscada[$j]) {
                        $encontrado = false;
                        break;
                    }
                }
                if ($encontrado) {
                    $repetido++;
                }
            }
        }
        return $repetido;
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $palabra = $_POST['palabra'];
        $texto = $_POST['texto'];
        $resultado = buscar($palabra, $texto);
    } else {
        $palabra = '';
        $texto = '';
        $resultado = 0;
    }
    ?>
    <form method="POST" action="ejercicio15.php">
        <label for="texto">Texto:</label>
        <textarea required id="texto" name="texto" placeholder="Ingrese aqui el texto..."></textarea><br><br>

        <label for="palabra">Palabra a buscar:</label>
        <input required type="text" id="palabra" name="palabra" placeholder="Ingrese la palabra..." ><br><br>

        <input type="submit"></input>
    </form>

    <h3>Resultado:</h3>
    <p>
        <?php
        echo "Se repite la palabra $palabra en el texto $resultado cantidad de veces"
        ?>
    </p>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>