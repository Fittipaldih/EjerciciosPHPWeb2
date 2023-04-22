<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fittipaldi - Ejercicio 2</title>
</head>
<body>

<h2>Ejercicio 2</h2>
<p>Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de dicha problemática:
    recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)^2 </p>
<p>A) binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
    potencia</p>
<p>B) binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
    desarrollada del binomio: a^2 + 2*a*b + b^2</p>
<form action="ejercicio2.php" method="post" enctype="multipart/form-data" >
    <label for="1">Ingrese numero 1</label>
    <input type="number" name="numero1" id="1">
    <br>
    <label for="2">Ingrese numero 2</label>
    <input type="number" name="numero2" id="2">
    <br>
    <input type="submit">
</form>
<hr>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];

echo("<br> Solucion 1(con pow) <br>");
 function binomioCuadradoPerfecto_a($a, $b){
     return pow(($a + $b), 2);
 }
 echo(binomioCuadradoPerfecto_a($num1,$num2) . "<br>");
echo("<br> Solucion 2 (**) <br>");
 function binomioCuadradoPerfecto_a2($a, $b){
     $suma = $a + $b;
     return $suma ** 2;
 }
echo(binomioCuadradoPerfecto_a2($num1,$num2). "<br>");
echo("<br> Solucion 3 (a^2+2ab+b^2) <br>");
 function binomioCuadradoPerfecto_b($a, $b){
        return pow($a,2) + 2 * $a * $b + pow($b,2);
 }
echo(binomioCuadradoPerfecto_b($num1,$num2). "<br>");
 
}
?>
<a href="../index.php">Volver</a>
</body>
</html>