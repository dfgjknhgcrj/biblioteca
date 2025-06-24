<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $id_aluno = mysqli_real_escape_string($conn, $_POST['id_aluno']);
    $id_livro = mysqli_real_escape_string($conn, $_POST['id_livro']);
    $data_emprestimo = mysqli_real_escape_string($conn, $_POST['data_emprestimo']);
    $data_devolucao = mysqli_real_escape_string($conn, $_POST['data_devolucao']);

    // SQL para atualizar os dados na tabela emprestimos
    $sql = "UPDATE emprestimos SET id_aluno='$id_aluno', id_livro='$id_livro', data_emprestimo='$data_emprestimo', data_devolucao='$data_devolucao' WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Empréstimo atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o empréstimo: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Empréstimo</title>
</head>
<body>
    <h2>Atualizar Empréstimo</h2>
    <form method="POST" action="atualizar_emprestimo.php">
        <label for="id">ID do Empréstimo:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="id_aluno">ID do Aluno:</label>
        <input type="number" id="id_aluno" name="id_aluno" required><br><br>

        <label for="id_livro">ID do Livro:</label>
        <input type="number" id="id_livro" name="id_livro" required><br><br>

        <label for="data_emprestimo">Data do Empréstimo:</label>
        <input type="date" id="data_emprestimo" name="data_emprestimo" required><br><br>

        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" id="data_devolucao" name="data_devolucao" required><br><br>

        <button type="submit">Atualizar Empréstimo</button>
    </form>
</body>
</html>
