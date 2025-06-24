<?php
// Conexão com o banco de dados
include 'conexao.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o ID do professor a ser deletado
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // SQL para deletar o professor da tabela
    $sql = "DELETE FROM professores WHERE id='$id'";

    // Executa o SQL e verifica se deu certo
    if (mysqli_query($conn, $sql)) {
        echo "Professor deletado com sucesso!";
    } else {
        echo "Erro ao deletar o professor: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Professor</title>
</head>
<body>
    <h2>Deletar Professor</h2>
    <form method="POST" action="deletar_professor.php">
        <label for="id">ID do Professor:</label>
        <input type="number" id="id" name="id" required><br><br>

        <button type="submit">Deletar Professor</button>
    </form>
</body>
</html>
