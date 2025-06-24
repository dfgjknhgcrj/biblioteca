<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $data_emprestimo = mysqli_real_escape_string($conn, $_POST['data_emprestimo']);
    $data_devolucao = mysqli_real_escape_string($conn, $_POST['data_devolucao']);

    // SQL para inserir os dados na tabela emprestimos
    $sql = "INSERT INTO emprestimos (id_aluno, id_livro, data_emprestimo, data_devolucao) VALUES ('$id_aluno', '$id_livro', '$data_emprestimo', '$data_devolucao')";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Empréstimo cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o empréstimo: " . mysqli_error($conn);
    }
}
?>
