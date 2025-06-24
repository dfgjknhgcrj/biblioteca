<?php
// Configuração do banco de dados
$servername = "localhost"; // Servidor do banco de dados (geralmente localhost)
$username = "root"; // Usuário do banco de dados
$password = ""; // Senha do banco de dados (caso tenha senha, coloque aqui)
$dbname = "biblioteca"; // Nome do banco de dados

try {
    // Criando a conexão com PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);

    // Definindo o modo de erro do PDO para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mensagem opcional para verificar a conexão
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Falha na conexão: " . $e->getMessage());
}
?>
