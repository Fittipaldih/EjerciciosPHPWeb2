<?php
function incrementar(&$a){
    $a = $a+1;
}

$a=5;

echo("El numero antes de llamar la funcion es: $a <br>");

incrementar($a);

echo("Despues de llamar a la funcion es: $a");
?>