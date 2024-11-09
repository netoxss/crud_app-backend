<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
include 'db.php';


$data = json_decode(file_get_contents("php://input"));
$name = $data->name;
$email = $data->email;

$stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
if ($stmt->execute([$name, $email])) {
    echo json_encode(['message' => 'Usuário cadastrado com sucesso']);
} else {
    echo json_encode(['message' => 'Cadastrado do Usuário Falhou']);
}
?>
