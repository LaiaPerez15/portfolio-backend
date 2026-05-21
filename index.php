<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    http_response_code(204);
    exit();
}

$cvData = [
    "name" => "Laia Perez",
    "title" => "Desarrolladora Web Full Stack",
    "email" => "laiaperez0612@gmail.com",
    "github" => "https://github.com/LaiaPerez15",
    "skills" => ["PHP", "JavaScript", "React", "Docker", "Jenkins", "Cloudflare"],
    "experience" => [
        [
            "company" => "Esdi Systems",
            "role" => "Frontend Developer",
            "years" => "2023-2025"
        ],
        [
            "company" => "Esdi Systems",
            "role" => "DevOps Intern",
            "years" => "2025-present"
        ]
    ]
];

echo json_encode($cvData, JSON_PRETTY_PRINT);
?>