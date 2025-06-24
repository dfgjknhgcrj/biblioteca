<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
</head>
<body>
    <h2>Cadastro de Professor</h2>
    <form method="POST" action="cadastro_professores.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <button type="submit">Cadastrar Professor</button>
    </form>

    <h2>Cadastro de Empréstimo</h2>
    <form method="POST" action="cadastro_emprestimos.php">
        <label for="data_emprestimo">Data do Empréstimo:</label>
        <input type="date" id="data_emprestimo" name="data_emprestimo" required><br><br>

        <label for="data_devolucao">Data de Devolução:</label>
        <input type="date" id="data_devolucao" name="data_devolucao" required><br><br>

        <button type="submit">Cadastrar Empréstimo</button>
    </form>

 

    <h2>Cadastro de Aluno</h2>
    <form method="POST" action="./alunos/cadastro_alunos.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <button type="submit">Cadastrar Aluno</button>
    </form>


</body>
</html>
