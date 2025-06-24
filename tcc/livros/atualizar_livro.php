<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $titulo = mysqli_real_escape_string($conn, $_POST['titulo']);
    $autor = mysqli_real_escape_string($conn, $_POST['autor']);
    $ano_publicacao = mysqli_real_escape_string($conn, $_POST['ano_publicacao']);
    $genero = mysqli_real_escape_string($conn, $_POST['genero']);

    // SQL para atualizar os dados na tabela livros
    $sql = "UPDATE books SET titulo='$titulo', autor='$autor', ano_publicacao='$ano_publicacao', genero='$genero' WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o livro: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Livro</title>
</head>
<body>
    <h2>Atualizar Livro</h2>
    <form method="POST" action="atualizar_livro.php">
        <label for="id">ID do Livro:</label>
        <input type="number" id="id" name="id" required><br><br>

        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="ano_publicacao">Ano de Publicação:</label>
        <input type="number" id="ano_publicacao" name="ano_publicacao" required><br><br>

        <label for="genero">Gênero:</label>
        <input type="text" id="genero" name="genero" required><br><br>

        <button type="submit">Atualizar Livro</button>
    </form>
</body>
</html>
