<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

echo json_encode([
    "message" => "API del CV funcionando correctamente",
    "endpoints" => [
        "GET /backend/index.php" => "Datos completos del CV",
        "GET /backend/api.php" => "Este mensaje de prueba"
    ]
]);
?>