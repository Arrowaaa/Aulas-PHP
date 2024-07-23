<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 style="display: flex; justify-content: center;">Usuários</h1>
    <a style="display: flex; justify-content: center;" hrf='form.php st'>Tabela de usuários</a><br>
    <main name="tabela" id="tabela">
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Foto</th>
                <th>Ações</th>
            </tr>
            <tr>
                <?php
                include "conexao.php";
                $script = "SELECT * FROM  fotos";
                $resultado = $conn->query($script)->fetchAll();
                foreach($resultado as $dados){
                    echo "<tr>";
                    echo "<td>". $dados['nome'] . "</td>";
                    echo "<td><img src='" . $dados['foto'] . "' width=100> </td>";
                    echo "<td><a href='form-editar.php?id=". $dados['id'] . "'>Editar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
    </main>
    <a style="display: flex; justify-content: end;" href="form.php">Cadastrar Novo Usuário</a>
</body>

</html>