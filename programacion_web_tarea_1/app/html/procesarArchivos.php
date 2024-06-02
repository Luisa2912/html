<?php
$archivo1 = $_FILES['archivo1'];
$archivo2 = $_FILES['archivo2'];

echo "Archivo 1: <br>";
echo "Nombre: {$archivo1['name']} <br>";
echo "Tamaño: {$archivo1['size']} bytes <br>";
echo "Tipo: {$archivo1['type']} <br>";

echo "<br>";
echo "Archivo 2: <br>";
echo "Nombre: {$archivo2['name']} <br>";
echo "Tamaño: {$archivo2['size']} bytes <br>";
echo "Tipo: {$archivo2['type']} <br>";

?>