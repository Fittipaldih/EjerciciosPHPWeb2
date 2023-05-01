<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 18</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 18: Pacman come tuti</h2>
    <p>
        Crear los objetos packman, fantasma , píldora y fantasma comestible. <br>
        Packman debe responder al método: chocaContra( elemento ) y lanzar una excepción si se
        queda sin vidas. Dicha Excepcion debe llamarse FinPartida, y debe indicar la cantidad de
        puntos obtenidos. <br>
        Imprimir en pantalla los puntos obtenidos (Ej: Partida activa - 600 puntos - 5 vidas)<br>
        Por defecto packman comienza con 3 vidas y cero puntos. <br>
        - Si packman choca un fantasma, resta una vida <br>
        - Si packman choca un fantasma comestible, suma 100 puntos <br>
        - Si packman choca una pildora, suma 10 puntos <br>
        - Si packman se queda sin vidas, finaliza la partida <br>

    </p>
    <?php
include_once("Packman.php");
include_once('Partida.php');
include_once('FantasmaComestible.php');
include_once('Pildora.php');
include_once('Espina.php');
include_once('Fantasma.php');

try {
    $puntaje = 0;

    $partida = new Partida($puntaje);
    $packman = new Packman($partida);
    $pildora = new Pildora();
    $espina = new Espina();
    $fantasma = new Fantasma();

    $fantasmaComestible = new FantasmaComestible();

    $packman->chocaContra($fantasmaComestible);
    $partida->mostrarPuntaje();

    $packman->chocaContra($fantasmaComestible);
    $partida->mostrarPuntaje();

    $packman->chocaContra($pildora);
    $partida->mostrarPuntaje();

    $packman->chocaContra($pildora);
    $packman->chocaContra($pildora);
    $partida->mostrarPuntaje();

    $packman->chocaContra($espina);
    $packman->chocaContra($espina);
    $partida->mostrarPuntaje();


    $packman->chocaContra($fantasma);
    $partida->mostrarPuntaje();

    $packman->chocaContra($fantasma);
    $packman->chocaContra($fantasma);
    $partida->mostrarPuntaje();

} catch (FinDePartida $e) {
    echo  $e->getMessage();
}
?>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>