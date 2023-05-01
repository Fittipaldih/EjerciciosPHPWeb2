<?php
include_once('./figuras/Piedra.php');
include_once('./figuras/Papel.php');
include_once('./figuras/Tijera.php');
class FigurasFactory {
    public function create($jugada, $jugador) {
        switch (strtolower($jugada)) {
            case 'piedra':
                return new Piedra($jugador);
            case 'tijera':
                return new Tijera($jugador);
            case 'papel':
                return new Papel($jugador);
        }
    }
}