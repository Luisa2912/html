<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$pais = $_POST['pais'];
$valoracion = $_POST['valoracion'];
$comentarios = $_POST['comentarios'];

echo "Nombre: $nombre <br>";
echo "Correo electrónico: $email <br>";
echo "País de origen: $pais <br>";
echo "Valoración del sitio: $valoracion <br>";
echo "Comentarios: <br>";
echo nl2br($comentarios);

