<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <a href="index.php">Voltar</a>
    <h1 style="display: flex; justify-content: center;">Cadastrar Novo Usuário</h1>
    <main name="form" id="form" style="display: flex; justify-content: center;">
        
        <form action="salvar.php" method="post" nome='novo-usuario' enctype="multipart/form-data">
            <label for="nome">Nome</label><br>
            <input name="nome" id="nome" type="text">
            <br><br>
            <label for="foto">Foto</label><br>
            <input name="foto" id="foto" type="file">
            <br><br>
            <button type="submit">SALVAR</button>
        </form>
    </main>

</body>

</html>