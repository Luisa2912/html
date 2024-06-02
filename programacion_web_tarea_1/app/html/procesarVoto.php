<?php
$sistemaOperativo = $_POST['sistemaOperativo'];

$votosLinux = 0;
$votosWindows = 0;

if ($sistemaOperativo === "linux") {
    $votosLinux++;

} else if ($sistemaOperativo === "windows") {
    $votosWindows++;
}

echo "Resultados parciales:<br>";
echo "Votos para Linux: $votosLinux <br>";
echo "Votos para Windows: $votosWindows <br>";
?>