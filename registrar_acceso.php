<?php
date_default_timezone_set("America/Bogota"); // Establecer hora de Colombia

$data = json_decode(file_get_contents("php://input"), true);
$usuario = $data["usuario"] ?? "desconocido";
$fecha = date("d-m-Y H:i:s"); // Formato día-mes-año hora:minuto:segundo

// Guardar en un archivo de log
file_put_contents("accesos.txt", "$fecha - $usuario\n", FILE_APPEND);
?>
