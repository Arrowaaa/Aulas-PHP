<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_GET['nome'])) {
    $busca = $_GET['nome'];

    $conexao = new PDO('mysql:host=localhost;dbname=bd_policebox2', 'root', '');
    $query = "SELECT * FROM tb_produto where titulo like '%{$busca}%'";
    $resultado = $conexao->query($query)->fetchAll();
}
?>

<body>
    <form action="#" method="get">
        <input type="text" name="nome" placeholder="Nome do Produto">
        <input type="submit" value="Enviar">
    </form>
    <br>
    <table border="1">
        <thead>

            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>VALOR</th>
            </tr>

        </thead>
        <tbody>
            <?php
            if (!empty($resultado)) {
                foreach ($resultado as $value) { 
            ?>

                    <tr>
                        <td> <?= $value['id'] ?> </td>
                        <td> <?= $value['titulo'] ?> </td>
                        <td>R$ <?= str_replace('.',',', $value["preco"] ) ?> </td>
                    </tr>

            <?php 
                }
            } 
            ?>

        </tbody>
    </table>


</body>

</html>