<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiperflex</title>
    <style>
        * {
            margin: 0;
        }

        .button {
            display: flex;
            align-items: end;
            justify-content: end;
        }

        .checkbox {
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
    </style>
</head>

<body style="background-color:grey">
    <div class="banner">
        <h1>Hiperflex</h1>
    </div>
    <h2>Exercício Com Checkbox 4 </h2>
    <br>
    <a class="px" href="checkbox4.php"> Proxímo Exercício </a>
    <br>
    <div class="checkbox">
        <label for="">Categória e Filtros de Genêros Com Checkbox</label>
        <div class="genero">
            <form action="#" method="get">
                <br>
                <div>
                    <input type="checkbox" name="text[]" id="acao" value="Ação">
                    <label for="acao">Ação</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="biografia" value="Biografia">
                    <label for="biografia">Biografia</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="aventura" value="Aventura">
                    <label for="aventura">Aventura</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="crime" value="Crime">
                    <label for="crime">Crime</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="drama" value="Drama">
                    <label for="drama">Drama</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="romance" value="Romance">
                    <label for="romance">Romance</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="fantasia" value="Fantasia">
                    <label for="fantasia">Fantasia</label>
                </div>
                <div>
                    <input type="checkbox" name="text[]" id="scifi" value="Ficção científica">
                    <label for="scifi">Ficção científica</label>
                </div>
                <br>
                <div class="button">
                    <input type="submit" value="Filtrar">
                </div>
            </form>
        </div>
    </div>
        <br>
    <?php
    if (!empty($_GET['text'])) {
        $generos = $_GET['text'];
        echo 'Você escolheu os Gêneros: ' . implode(', ', $generos);
        echo '<br>';
        $conexao = new PDO('mysql:host=localhost;dbname=bd_filmes', 'root', '');

        $placeholders = str_repeat('?,', count($generos) - 1) . '?';
        $query = "SELECT * FROM tb_filme WHERE genero IN ($placeholders)";
        $stmt = $conexao->prepare($query);
        $stmt->execute($generos);
        $resultado = $stmt->fetchAll();
       echo '<br>';
        foreach ($resultado as $filme) {
            echo '<p>' . $filme['nome'] . ' - ' . $filme['genero'] . '</p>';
        }
    }
    ?>
</body>

</html>
