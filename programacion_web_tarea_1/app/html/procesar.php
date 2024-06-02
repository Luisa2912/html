<?php

if (isset($_POST['nombre']) && isset($_POST['calificacion'])) {
    $nombre = $_POST['nombre'];
    $calificacion = $_POST['calificacion'];

    echo "<h2>Calificación enviada</h2>";
    echo "<p>Nombre del sitio web: $nombre</p>";
    echo "<p>Calificación: $calificacion</p>";
} else {
    echo "No se recibieron los datos del formulario.";
}

?>