<?php
if(isset($_FILES['archivo'])) {
    $nombre_archivo = $_FILES['archivo']['name'];
    $ruta_temporal = $_FILES['archivo']['tmp_name'];
    $ruta_destino = '../imagenes/' . $nombre_archivo;
    if(move_uploaded_file($ruta_temporal, $ruta_destino)){
        header('Location: ejercicio9.php');
        exit();
    } else {
        include_once("../header.php");
        echo "<br> <br>Error al subir archivo";
        include_once("../footer.php");
    }
}
?>