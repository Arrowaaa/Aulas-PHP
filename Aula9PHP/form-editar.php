<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>
    <a href="index.php">Voltar</a>
    <h1 style="display: flex; justify-content: center;">Editar Usuário</h1>
    <main name="form" id="form" style="display: flex; justify-content: center;">
        <?php 
        include "conexao.php";
        $script = "SELECT * FROM fotos WHERE id =".$_GET['id'];
        $resultado = $conn->query($script)->fetch();
        ?>
        <form action="salvar-editar.php?id=<?= $_GET['id']?>" method="post" nome='novo-usuario' enctype="multipart/form-data">
            <label for="nome">Nome</label><br>
            <input name="nome" id="nome" type="text" value="<?=$resultado['nome']?>">
            <br><br>
            <label for="foto">Foto</label><br>
            <input name="foto" id="foto" type="file">
            <br><br>
            <button type="submit">SALVAR</button>
        </form>
    </main>

</body>

</html>