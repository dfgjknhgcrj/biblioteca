<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o ID do aluno a ser deletado
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // SQL para deletar o aluno da tabela
    $sql = "DELETE FROM alunos WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Aluno deletado com sucesso!";
    } else {
        echo "Erro ao deletar o aluno: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Aluno</title>
</head>
<body>
    <h2>Deletar Aluno</h2>
    <form method="POST" action="deletar_aluno.php">
        <label for="id">ID do Aluno:</label>
        <input type="number" id="id" name="id" required><br><br>

        <button type="submit">Deletar Aluno</button>
    </form>
</body>
</html>
