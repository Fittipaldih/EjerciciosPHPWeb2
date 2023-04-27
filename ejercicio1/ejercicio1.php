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
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
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
// A: IF ELSE
    function semaforo_a($color)
    {
        if ("rojo" == strtolower($color)) {
            echo("Rojo: Frene <br>");
        } elseif ("amarillo" == strtolower($color)) {
            echo("Amarillo: Precaucion<br>");
        } elseif ("verde" == strtolower($color)) {
            echo("Verde: Avance<br>");
        } else {
            echo("Estado desconocido<br>");
        }
    }
// B: IF INLINE
    function semaforo_b($color)
    {
        echo ("verde" === strtolower($color) ? "Verde, avance <br>" : ("amarillo" === strtolower($color) ? "Amarillo, precaucion <br>" : ("rojo" === strtolower($color) ? "Rojo, frene <br>" : "Estado desconocido")));
    }
    // C: SWITCH
    function semaforo_c($color)
    {
        switch (strtolower($color)) {
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

    echo("Probando solucion con if else: <br>");
    semaforo_a($color);
    echo("<br>");

    echo("Probando solucion con if inline: <br>");
    semaforo_b($color);
    echo("<br>");

    echo("Probando solucion con switch: <br>");
    semaforo_c($color);
}
?>
<a href="../index.php">Volver</a>
</main>
</body>
</html>