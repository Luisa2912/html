<?php

$correosSeleccionados = $_POST['correos'];

echo "Correos electrónicos seleccionados: <br>";

foreach ($correosSeleccionados as $correo) {

    echo "- $correo <br>";

}
?>