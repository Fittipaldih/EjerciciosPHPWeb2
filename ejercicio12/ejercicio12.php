<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 12</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
<header>
    <?php
    include_once("../header.php");
    ?>
</header>
<main>
    <h2>Ejercicio 12: Contador de visitas… extraterrestres</h2>
    <p>
        Crear una web que permita ingresar en un formulario, los datos de ingreso a nuestro planeta:
        nombre del visitante y planeta perteneciente (mediante un combo).
        Una vez enviado el formulario, muestra una segunda página que liste todos los visitantes que
        cruzaron este control interplanetario, y un contador del total de visitas, que no pertenecen al
        planeta Tierra.
    </p>
    <form action="visitante.php" method="post">
        <label for="nombre">Nombre: </label>
        <input autofocus type="text" name="nombre" id="nombre" placeholder="Tu nombre aqui...">
        <label for="planeta">Planeta: </label>
        <select name="planeta" id="planeta">
            <option value="Mercurio">Mercurio</option>
            <option value="Venus">Venus</option>
            <option value="Marte">Marte</option>
            <option value="Jupiter">Jupiter</option>
            <option value="Saturno">Saturno</option>
            <option value="Urano">Urano</option>
            <option value="Neptuno">Neptuno</option>
            <option value="PLuton">Pluton</option>
            <option value="Ceres">Ceres</option>
            <option value="Eris">Eris</option>
        </select>
        <input type="submit" value="Enviar registro">
    </form>
</main>
<footer>
    <?php
    include_once("../footer.php");
    ?>
</footer>
</body>
</html>