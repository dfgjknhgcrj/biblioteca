<?php
// Conexão com o banco de dados
include 'conexao.php';

// SQL para selecionar todos os alunos
$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Lista de Alunos</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Série</th>
                <th>E-mail</th>
            </tr>";
    // Saída de dados de cada linha
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["serie"] . "</td>
                <td>" . $row["email"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum aluno encontrado.";
}

// Fechando a conexão
mysqli_close($conn);
?>
