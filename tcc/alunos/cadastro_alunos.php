<?php
// Conexão com o banco de dados
include '../conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $serie = mysqli_real_escape_string($conn, $_POST['serie']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // SQL para inserir os dados na tabela alunos
    $sql = "INSERT INTO alunos (nome, serie, email) VALUES ('?', '?', '?')";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o aluno: " . mysqli_error($conn);
    }
}
?>
