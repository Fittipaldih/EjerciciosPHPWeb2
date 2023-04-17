<?php
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
        echo("Color invalido<br>");
    }
}
echo("Probando solucion con if else: <br>");
semaforo_a("rojo");
semaforo_a("amarillo");
semaforo_a("verde");
echo("<br>");

// B: IF INLINE E IMPRIME DIRECTO
function semaforo_b($color){
    echo ($color == "verde") ? "Verde, avance <br>" : (($color == "amarillo") ? "Amarillo, precaucion <br>" : "Rojo, frene <br>");
}
echo("Probando solucion con if inline: <br>");
semaforo_b("verde");
semaforo_b("amarillo");
semaforo_b("rojo");
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
            echo("Color invalido <br>");
    }
}
echo("Probando solucion con switch: <br>");
semaforo_c("verde");
semaforo_c("amarillo");
semaforo_c("rojo");
?>