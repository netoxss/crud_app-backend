<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
include 'db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
if ($stmt->execute([$id])) {
    echo json_encode(['message' => 'Usuário deletado com sucesso']);
} else {
    echo json_encode(['message' => 'Exclusão do Usuário Falhou!']);
}
?>
