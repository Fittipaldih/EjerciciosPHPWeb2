<?php
echo("<br> <h2>Ejercicio 5. Sumatoria</h2>");
$vector = [1, 2, 3, 4];
// var_dump($vector);
echo("Sumatoria Solucion A (FOR)<br>");
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
?>