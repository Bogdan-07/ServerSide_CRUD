<?php
header("Content-Type: application/json; charset=UTF-8");
$users = [
    ["id" => 1, "name" => "Alice", "email" => "alice@example.com"],
    ["id" => 2, "name" => "Bob", "email" => "bob@example.com"]
];

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo json_encode($users);
} else {
    http_response_code(405);
    echo json_encode(["message" => "Metodo non supportato"]);
}