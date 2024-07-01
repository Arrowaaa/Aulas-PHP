<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<style>
    * {
        margin: 0;
        padding: auto;
    }

    body {
        background-color: darkcyan;
    }

    .box {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1px;
        margin: 100px;

    }

    input {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px;
        border: solid 1px;
        border-radius: 10px;
        background-color: black;
        color: whitesmoke;
    }

    .button {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: black;
        color: whitesmoke;
        border: solid 1px;
        border-radius: 20px;
    }
</style>

<body>
    <div class="box">
        <form action="auxCadastrarUsuario.php" method="post">
            <h1>Cadastrar Usuario</h1><br>

            <input type="text" name="nome" placeholder="Nome">
            <input type="text" name="usuario" placeholder="Usuario">
            <input type="text" name="senha" placeholder="Senha">
            <input type="text" name="confirma" placeholder="Confirma Senha">

            <input type="submit" value="Cadastrar" class="button">
        </form>
    </div>
</body>

</html>