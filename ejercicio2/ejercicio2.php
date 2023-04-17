<?php
 function binomioCuadradoPerfecto_a($a, $b){
     return pow(($a + $b), 2);
 }
 echo(binomioCuadradoPerfecto_a(2, 3) . "<br>");
 function binomioCuadradoPerfecto_a2($a, $b){
     $suma = $a + $b;
     return $suma ** 2;
 }
echo(binomioCuadradoPerfecto_a2(2, 2). "<br>");
?>