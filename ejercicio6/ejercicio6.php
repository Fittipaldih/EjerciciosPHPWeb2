<?php
class Persona{
    public $nombre;
    public $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($nombre, $apellido, $horario){
        if ($horario > 5 && $horario < 13){
            return ("Buenos dias $nombre $apellido");
        }
        elseif ($horario >= 13 && $horario <= 21){
            return ("Buenas tardes $nombre $apellido");
        }
        else{
            return ("Buenas noches $nombre $apellido");
        }
    }

    public function saludoInformal($horario){
        if ($horario >= 5 && $horario < 13){
            return ("Hola " . $this->nombre . " que tengas un buen dia!");
        }
        elseif ($horario >= 13 && $horario <= 21){
            return ("Hola " . $this->nombre . " que tengas buenas tardes!");
        }
        else{
            return ("Hola " . $this->nombre . " que tengas buenas noches!");
        }
    }
}
$persona = new Persona("Juan", "Perez");
echo ($persona -> saludoInformal(11));

?>