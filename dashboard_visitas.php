<?php
// Establecer zona horaria de Colombia
date_default_timezone_set("America/Bogota");

// Obtener la IP real del cliente
function obtenerIp() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    return $_SERVER['REMOTE_ADDR'];
}

$ip = obtenerIp();
$fechaHora = date("d/m/Y H:i:s"); // Formato colombiano: día/mes/año hora:minutos:segundos
$registro = "$fechaHora | IP: $ip" . PHP_EOL;

// Guardar en archivo
file_put_contents("registro_visitas.txt", $registro, FILE_APPEND);
?>
