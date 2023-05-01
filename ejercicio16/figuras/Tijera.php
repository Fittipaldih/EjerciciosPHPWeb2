<?php
class Tijera {
    private $jugador;
    public function __construct($jugador) {
        $this->jugador = $jugador;
    }
    public function jugar($jugada) {
        return $jugada->jugasContraTijera($this);
    }
    public function jugasContraPiedra($oponente) {
        return $oponente->ganaste();
    }
    public function jugasContraPapel($oponente) {
        return $this->ganaste();
    }
    public function jugasContraTijera($oponente) {
        return "Empate";
    }
    public function ganaste() {
        return $this->jugador;
    }
}