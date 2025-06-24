<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $serie = mysqli_real_escape_string($conn, $_POST['serie']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // SQL para atualizar os dados na tabela alunos
    $sql = "UPDATE alunos SET nome='$nome', serie='$serie', email='$email' WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Aluno atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o aluno: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Aluno</title>
</head>
<body>
    <h2>Atualizar Aluno</h2>
    <form method="POST" action="atualizar_aluno.php">
        <label for="id">ID do Aluno:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Atualizar Aluno</button>
    </form>
</body>
</html>
