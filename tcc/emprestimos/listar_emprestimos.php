<?php
// Conexão com o banco de dados
include 'conexao.php';

// SQL para selecionar todos os empréstimos
$sql = "SELECT * FROM emprestimos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Lista de Empréstimos</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>ID do Aluno</th>
                <th>ID do Livro</th>
                <th>Data do Empréstimo</th>
                <th>Data de Devolução</th>
            </tr>";
    // Saída de dados de cada linha
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["id_aluno"] . "</td>
                <td>" . $row["id_livro"] . "</td>
                <td>" . $row["data_emprestimo"] . "</td>
                <td>" . $row["data_devolucao"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum empréstimo encontrado.";
}

// Fechando a conexão
mysqli_close($conn);
?>
