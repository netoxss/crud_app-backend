<?php
$host = 'localhost';
$dbname = 'crud_db';
$username = 'root'; // Substitua por seu usuário do MySQL, se diferente
$password = ''; // Substitua pela sua senha do MySQL, se houver

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
