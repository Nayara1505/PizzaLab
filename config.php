<?php
$dbHost = 'localhost';
$dbUserName = 'root';
$dbPassword = '';    // coloque sua senha do MYSQL aqui
$dbName = 'formulario_pizzaria';

$conexao = new mysqli($dbHost, $dbUserName, $dbPassword, $dbName);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Opcional: definir charset
$conexao->set_charset("utf8mb4");

?>
