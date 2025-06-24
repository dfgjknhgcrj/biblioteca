<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Fazendo o hash da senha para segurança
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // SQL para inserir os dados na tabela professores
    $sql = "INSERT INTO professores (nome, cpf, senha, email) VALUES ('$nome', '$cpf', '$senha_hash', '$email')";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Professor cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o professor: " . mysqli_error($conn);
    }
}
?>