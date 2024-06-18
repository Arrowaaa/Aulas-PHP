<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiperflex</title>
</head>

<style>
    * {
        margin: 0;
    }

    .button {
        display: flex;
        align-items: end;
        justify-content: end;
    }

    .radios {
        border-radius: 2px;
        border: 2px solid black;
        padding: 2px 6px;
        width: 200px;
        height: 260px;
    }

    .banner {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: cyan;
        height: 150px;
    }

    h1 {
        color: blueviolet;
    }

    h2 {
        display: flex;
        align-items: center;
        justify-content: center;
        color: antiquewhite;
    }

    .px {
        color: antiquewhite;
    }
</style>

<body style="background-color:grey">
    <div class="banner">
        <h1>Hiperflex</h1>
    </div>
    <h2>Exercício Com Radio-Button 1</h2>
    
    <a class="px" href="checkbox.php"> Proxímo Exercício </a>
    <br><br>

    <div class="radios">
        <label for="">Categória e Filtros de Genêros</label>
        <div class="genero">
            <form action="#" method="get">
                <br>
                <div>
                    <input type="radio" name="text" id="acao" value="Ação">
                    <label for="">Ação</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Biography" value="Biografico">
                    <label for="">Biografia</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Adventure" value="Aventura">
                    <label for="">Aventura</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Crime" value="Crime">
                    <label for="">Crime</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Drama" value="Drama">
                    <label for="">Drama</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Romance" value="Romance">
                    <label for="">Romance</label>
                </div>
                <div>
                    <input type="radio" name="text" id="Fantasy" value="Fantásia">
                    <label for="">Fantásia</label>
                </div>
                <div>
                    <input type="radio" name="text" id="scifi" value="Ficção científica">
                    <label for="">Ficção científica</label>
                </div>
                <div class="button">
                    <input type="submit" value="Filtrar">
                </div>
            </form>
        </div>
        <br>


        <?php


        if (!empty($_GET['text'])) {
            $genero = $_GET['text'];
            echo 'Você escolheu o Gênero: ' . $genero;
           
        }

        $conexao = new PDO('mysql:host=localhost;dbname=bd_filmes', 'root', '');

        $query = "SELECT * FROM tb_filme where genero like '%{$genero}%'";

        $resultado = $conexao->query($query)->fetchAll(); ?>

        <br>

</body>

</html>