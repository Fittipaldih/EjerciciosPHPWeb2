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
    <h2>Ejercicio 14: Resultado</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $dimension = $_POST['dimension'];
        // Crear matriz cuadrada de NxN, en realidad,la matriz ya esta creada sea lo que sea que ingrese el usuario, con un maximo de 6x6, solo que cambia en cuanto la recorro
        $matriz = array(
            array(1, 2, 3, 4, 5, 6),
            array(7, 8, 9, 10, 11, 12),
            array(13, 14, 15, 16, 17, 18),
            array(19, 20, 21, 22, 23, 24),
            array(25, 26, 27, 28, 29, 30),
            array(31, 32, 33, 34, 35, 36)
        );

        // a) Recorrer la matriz con un solo FOR y mostrar los valores de la diagonal principal
        // La diagonal principal es aquella en la que el índice de fila y el índice de columna son iguales.
        // Por lo tanto, en cada iteración del bucle, accedemos al elemento de la matriz en la posición [$i][$i] y lo mostramos en pantalla
        echo "Diagonal Principal: ";
        for ($i = 0; $i < $dimension; $i++) {
            echo $matriz[$i][$i] . " ";
        }
        echo "<br>";
        // b) Recorrer la matriz con un solo FOR y mostrar los valores de la diagonal secundaria
        //  La diagonal secundaria es aquella en la que la suma del índice de fila y el índice de columna es igual a la dimensión de la matriz menos 1.
        // Por lo tanto, en cada iteración del bucle, accedemos al elemento de la matriz en la posición [$i][$dimension - $i - 1] y lo mostramos en pantalla
        echo "Diagonal Secundaria: ";
        for ($i = 0; $i < $dimension; $i++) {
            echo $matriz[$i][$dimension - $i - 1] . " ";
        }
        echo "<br>";
        // c) Recorrer la matriz con 2 FOR y calcular la suma de todos los valores
        $suma = 0;
        for ($i = 0; $i < $dimension; $i++) {
            for ($j = 0; $j < $dimension; $j++) {
                $suma += $matriz[$i][$j];
            }
        }
        echo "Suma de todos los valores: $suma";
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