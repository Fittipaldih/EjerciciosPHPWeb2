<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 5</title>
</head>
<body>
<h2>Ejercicio 5</h2>
<p>Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la suma de todos sus
    valores. </p>
<p> A) función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for</p>
<p> B) función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each</p>
<p> C) función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</p>
<hr>
<?php
$vector = [1, 2, 3, 4];
var_dump($vector);
echo("<br><br>Sumatoria Solucion A (FOR)<br>");
function sumatoria_a($array){
    $suma = 0;
    for ($i=0; $i < count($array); $i++){
        $suma += $array[$i];
    }
    return $suma;
}
echo(sumatoria_a($vector) . "<br>");
echo("Sumatoria Solucion B (FOREACH)<br>");
function sumatoria_b($array){
    $suma=0;
    foreach ($array as $numero) {
        $suma+= $numero;
    }
    return $suma;
}
echo(sumatoria_b($vector) . "<br>");
echo("Sumatoria Solucion C (WHILE)<br>");
function sumatoria_c($array){
    $suma=0;
    $i=0;
    while ($i < count($array)){
        $suma += $array[$i];
        $i++;
    }
    return $suma;
}
echo(sumatoria_c($vector) . "<br>");
echo("<a href='../index.php'> Volver</a>");
?>
</body>
</html>