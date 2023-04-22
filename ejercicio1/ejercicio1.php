<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 1</title>
</head>
<body>

<h2>Ejercicio 1</h2>
<p>Cree una función llamada Semaforo, que recibe por parametro un cólor cómo texto (“rojo”
    “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
    “avance” o “estado desconocido” ante un caso no esperado.</p>
<p>A) Función semaforo_a (color): Resuelva la solución utilizando if else</p>
<p>B) Función semaforo_b (color): Resuelva la solución utilizando if inline (return ?: )</p>
<p>C) Función semaforo_c (color): Resuelva la solución utilizando switch. </p>
<form action="ejercicio1.php" method="post" enctype="multipart/form-data">
    <label for="color">Ingrese un color: </label>
    <input type="text" id="color" name="color">
    <input type="submit">
</form>
<hr>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = $_POST["color"];
// A: IF ELSE y con RETURN
    function semaforo_a($color)
    {
        if ($color == "rojo") {
            echo("Rojo: Frene <br>");
        } elseif ($color == "amarillo") {
            echo("Amarillo: Precaucion<br>");
        } elseif ($color == "verde") {
            echo("Verde: Avance<br>");
        } else {
            echo("Estado desconocido<br>");
        }
    }

    echo("Probando solucion con if else: <br>");
    semaforo_a($color);
    echo("<br>");

// B: IF INLINE E IMPRIME DIRECTO
    function semaforo_b($color)
    {
        echo ($color == "verde" ? "Verde, avance <br>" : $color == "amarillo") ? "Amarillo, precaucion <br>" : ($color == "rojo" ? "Rojo, frene <br>" : "Estado desconocido");
    }

    echo("Probando solucion con if inline: <br>");
    semaforo_b($color);
    echo("<br>");

// C: SWITCH IMPRIME DIRECTO
    function semaforo_c($color)
    {
        switch ($color) {
            case "rojo":
                echo("Rojo, frene <br>");
                break;
            case "amarillo":
                echo("Amarillo, precaucion <br>");
                break;
            case "verde":
                echo("Verde, avance <br>");
                break;
            default:
                echo("Estado desconocido<br>");
        }
    }

    echo("Probando solucion con switch: <br>");
    semaforo_c($color);
}
?>
<a href="../index.php">Volver</a>
</body>
</html>