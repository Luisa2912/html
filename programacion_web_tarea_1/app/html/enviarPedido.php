<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$pizza = $_POST['pizza'];
$tamano = $_POST['tamano'];
$extras = $_POST['extras'];

$asunto = "Pedido de pizza de $nombre";
$cuerpo = "**Pedido de pizza a domicilio:**\n\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "Dirección: $direccion\n";
$cuerpo .= "Teléfono: $telefono\n\n";
$cuerpo .= "**Detalles del pedido:**\n";
$cuerpo .= "Pizza: $pizza\n";
$cuerpo .= "Tamaño: $tamano\n";
$cuerpo .= "Extras:\n";
foreach ($extras as $extra) {
    $cuerpo .= " - $extra\n";
}

$destinatario = "pizzasya@gmail.com";
$remitente = "pedidos@tupizzeria.com";
$headers = "From: $remitente\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "<p>Pedido enviado correctamente. ¡Gracias!</p>";
} else {
    echo "<p>Error al enviar el pedido. Inténtalo de nuevo más tarde.</p>";
}




?>