<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 16</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 16: Piedra, Papel o Tijera</h2>
    <form action="ejercicio16.php" method="POST">
        <label for="j1">Jugador 1 elije:</label>
        <input type="text" id="j1" name="j1" required placeholder="Piedra papel o tijera..."><br>
        <label for="j2">Jugador 2 elije:</label>
        <input type="text" id="j2" name="j2" required placeholder="Piedra papel o tijera..."><br>
        <input type="submit" value="Jugar">
    </form>
    <?php
    include_once('./figuras/FigurasFactory.php');
    $figurasFactory = new FigurasFactory();
    if(isset($_POST["j1"]) && isset($_POST["j2"])) {
        $jugada1 = $figurasFactory->create($_POST['j1'], "jugador1");
        $jugada2 = $figurasFactory->create($_POST['j2'], 'jugador2');
        echo "<p>Resultado: Ganador = " . $jugada1->jugar($jugada2) . "</p>";
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