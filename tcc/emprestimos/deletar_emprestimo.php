<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o ID do empréstimo a ser deletado
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // SQL para deletar o empréstimo da tabela
    $sql = "DELETE FROM emprestimos WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Empréstimo deletado com sucesso!";
    } else {
        echo "Erro ao deletar o empréstimo: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Empréstimo</title>
</head>
<body>
    <h2>Deletar Empréstimo</h2>
    <form method="POST" action="deletar_emprestimo.php">
        <label for="id">ID do Empréstimo:</label>
        <input type="number" id="id" name="id" required><br><br>

        <button type="submit">Deletar Empréstimo</button>
    </form>
</body>
</html>
