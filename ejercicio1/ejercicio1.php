<?php
echo("<h2>Ejercicio 1. Semaforo</h2>");
// A: IF ELSE y con RETURN

function semaforo_a($color){
    if ($color == "rojo"){
        echo("Rojo: Frene <br>");
    }
    elseif ($color == "amarillo"){
        echo("Amarillo: Precaucion<br>");
    }
    elseif ($color == "verde"){
        echo("Verde: Avance<br>");
    }
    else {
        echo("Estado desconocido<br>");
    }
}
echo("Probando solucion con if else: <br>");
semaforo_a("rojo");
semaforo_a("amarillo");
semaforo_a("verde");
semaforo_a("violeta");
echo("<br>");

// B: IF INLINE E IMPRIME DIRECTO
function semaforo_b($color){
    echo ($color == "verde") ? "Verde, avance <br>" : (($color == "amarillo") ? "Amarillo, precaucion <br>" : "Rojo, frene <br>");
}
echo("Probando solucion con if inline: <br>");
semaforo_b("rojo");
semaforo_b("amarillo");
semaforo_b("verde");
echo ("<br>");

// C: SWITCH IMPRIME DIRECTO
function semaforo_c($color){
    switch($color){
        case "rojo":
            echo("Rojo, frene <br>");
            break;
        case "amarillo":
            echo("Amarillo, precaucion <br>");
            break;
        case "verde":
            echo ("Verde, avance <br>");
            break;
        default:
            echo("Estado desconocido<br>");
    }
}
echo("Probando solucion con switch: <br>");
semaforo_c("rojo");
semaforo_c("amarillo");
semaforo_c("verde");
semaforo_c("violeta");
?>