<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

include 'db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;
$name = $data->name;
$email = $data->email;

$stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
if ($stmt->execute([$name, $email, $id])) {
    echo json_encode(['message' => 'User updated successfully']);
} else {
    echo json_encode(['message' => 'Failed to update user']);
}
?>