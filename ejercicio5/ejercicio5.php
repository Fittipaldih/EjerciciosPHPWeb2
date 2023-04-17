<?php
$vector = [1, 2, 3, 4];
var_dump($vector);
echo("<br>");
function sumatoria_a($array){
    $suma = 0;
    for ($i=0; $i < count($array); $i++){
        $suma += $array[$i];
        }
        return $suma;
}
echo(sumatoria_a($vector) . "<br>");

function sumatoria_b($array){
    $suma=0;
    foreach ($array as $numero) {
        $suma+= $numero;
    }
    return $suma;
}
echo(sumatoria_b($vector) . "<br>");

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