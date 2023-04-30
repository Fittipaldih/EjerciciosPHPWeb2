<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 6</title>
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>

    <br>
    <h2>Ejercicio 6: Nombre Completo</h2>
    <p> Cree una clase llamada Saludar, la misma tendrá un constructor que reciba nombre, apellido de una
        persona.
        Dicha clase debe implementar el método saludoFormal( horario ) el cual debe responder
        concatenado al nombre un prefijo dependiendo del horario:
        05hs a 13hs “Buenos días”
        13hs a 21hs “Buenas tardes”
        21hs a 05hs “Buenas noches” </p>
    <p>Dicha clase debe implementar también el método saludoInformal(horario) el cual debe responder
        sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
        perteneciente al horario.</p>

    <h3>Solucion:</h3>
    <form action='ejercicio6.php' method='post' enctype='multipart/form-data'>
        <input type='text' placeholder='Ingrese su nombre' name='nombre'>
        <br>
        <br>
        <input type='text' placeholder='Ingrese su apellido' name='apellido'>
        <br>
        <br>
        <input type='text' placeholder='Ingrese el horario actual' name='hora'>
        <br>
        <br>
        <label for='formal'>Saludo Formal</label>
        <input type='radio' id='formal' name='saludo' value='formal'>
        <label for='informal'>Saludo Informal</label>
        <input type='radio' id='informal' name='saludo' value='informal'>
        <br>
        <br>
        <input type='submit'>
    </form>
</main>
</body>

<?php
class Persona{
    public $nombre;
    public $apellido;
    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function saludoFormal($horario){
        if ($horario >= 5 && $horario < 13){
            return ("Buenos dias " . $this->nombre . " " . $this->apellido);
        }
        elseif ($horario >= 13 && $horario <= 21){
            return ("Buenas tardes " . $this->nombre . " " . $this->apellido);
        }
        elseif ($horario > 21 && $horario <5){
            return ("Buenas noches " . $this->nombre . " " . $this->apellido);
        }
    }
    public function saludoInformal($horario){
        if ($horario >= 5 && $horario < 13){
            return ("Hola " . $this->nombre . " que tengas un buen dia!");
        }
        elseif ($horario >= 13 && $horario <= 21){
            return ("Hola " . $this->nombre . " que tengas buenas tardes!");
        }
        elseif ($horario > 21 && $horario <5){
            return ("Hola " . $this->nombre . " que tengas buenas noches!");
        }
    }
}
if(isset($_POST["nombre"]) && isset($_POST["apellido"])  && isset($_POST["saludo"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $hora = $_POST["hora"];
    $saludo = $_POST["saludo"];
    $persona = new Persona($nombre, $apellido);

    if ($saludo == 'formal')
        echo($persona->saludoFormal($hora) . "<br>");
    elseif ($saludo == 'informal')
        echo($persona->saludoInformal($hora) . "<br>");

}
echo("<a href='../index.php'> Volver</a>");
?>

