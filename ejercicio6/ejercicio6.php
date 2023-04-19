<?php
echo("<br> <h2>Ejercicio 6. Nombre Completo</h2>");
class Persona{
    public $nombre;
    public $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario){
        if ($horario > 5 && $horario < 13){
            return ("Buenos dias . $this->nombre . $this->apellido");
        }
        elseif ($horario >= 13 && $horario <= 21){
            return ("Buenas tardes . $this->nombre . $this->apellido");
        }
        else{
            return ("Buenas noches . $this->nombre . $this->apellido");
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
$persona1 = new Persona("Juan", "Perez");
$persona2 = new Persona("Alma", "Rodriguez");
echo ($persona1 -> saludoInformal(11) . "<br>");
echo ($persona2 -> saludoFormal(22));

?>