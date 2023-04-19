<?php
echo("<br> <h2>Ejercicio 2. Binomio cuadrado perfecto</h2>");
echo("<br> Solucion 1(con pow) <br>");
 function binomioCuadradoPerfecto_a($a, $b){
     return pow(($a + $b), 2);
 }
 echo(binomioCuadradoPerfecto_a(2, 2) . "<br>");
echo("<br> Solucion 2 (**) <br>");
 function binomioCuadradoPerfecto_a2($a, $b){
     $suma = $a + $b;
     return $suma ** 2;
 }
echo(binomioCuadradoPerfecto_a2(2, 2). "<br>");
echo("<br> Solucion 3 (a^2+2ab+b^2) <br>");
 function binomioCuadradoPerfecto_b($a, $b){
        return pow($a,2) + 2 * $a * $b + pow($b,2);
 }
echo(binomioCuadradoPerfecto_b(2, 2). "<br>");
?>