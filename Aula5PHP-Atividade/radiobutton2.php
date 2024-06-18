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

        .radio {
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

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: lightgray;
        }

    </style>
</head>

<body style="background-color:grey">
    <div class="banner">
        <h1>Hiperflex</h1>
    </div>
    <h2>Exercício 3 Com Radio-Button (Deve trazer em formato de _TABELA_ o resultado referente a escolha do usuário  ) </h2>
    <br>
    <a class="px" href="checkbox4.php"> Proxímo Exercício </a>
    <br><br>

    <div class="radio">
        <label for="">Categória e Filtros de Genêros Com Radio-button</label>
        <div class="genero">
            <form action="#" method="post">
                <br>
                <div>
                    <input type="radio" name="text" id="acao" value="Ação">
                    <label for="acao">Ação</label>
                </div>
                <div>
                    <input type="radio" name="text" id="biografia" value="Biografia">
                    <label for="biografia">Biografia</label>
                </div>
                <div>
                    <input type="radio" name="text" id="aventura" value="Aventura">
                    <label for="aventura">Aventura</label>
                </div>
                <div>
                    <input type="radio" name="text" id="crime" value="Crime">
                    <label for="crime">Crime</label>
                </div>
                <div>
                    <input type="radio" name="text" id="drama" value="Drama">
                    <label for="drama">Drama</label>
                </div>
                <div>
                    <input type="radio" name="text" id="romance" value="Romance">
                    <label for="romance">Romance</label>
                </div>
                <div>
                    <input type="radio" name="text" id="fantasia" value="Fantasia">
                    <label for="fantasia">Fantasia</label>
                </div>
                <div>
                    <input type="radio" name="text" id="scifi" value="Ficção científica">
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
    if (!empty($_POST['text'])) {
        $genero = $_POST['text'];
        echo 'Você escolheu o Gênero: ' . implode(', ', $genero);
        echo '<br>';
        $conexao = new PDO('mysql:host=localhost;dbname=bd_filmes', 'root', '');
        $resultado = $stmt->fetchAll();
       echo '<br>';
       if (!empty($resultado)) {
        echo '<table>';
        echo '<tr><th>Nome</th><th>Gênero</th></tr>';
        foreach ($resultado as $filme) {
            echo '<tr>';
            echo '<td>' . implode($filme['nome']) . '</td>';
            echo '<td>' . implode($filme['genero']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo 'Nenhum filme encontrado para o gênero selecionado.';
    }
    }
    ?>
</body>

</html>
