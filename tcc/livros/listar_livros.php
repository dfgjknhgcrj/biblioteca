<?php
// Conexão com o banco de dados
include 'conexao.php';

// SQL para selecionar todos os livros
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Lista de Livros</h2>";
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Ano de Publicação</th>
                <th>Gênero</th>
            </tr>";
    // Saída de dados de cada linha
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["titulo"] . "</td>
                <td>" . $row["autor"] . "</td>
                <td>" . $row["ano_publicacao"] . "</td>
                <td>" . $row["genero"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum livro encontrado.";
}

// Fechando a conexão
mysqli_close($conn);
?>
