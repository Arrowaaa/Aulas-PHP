<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade-PHP</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: left;
            padding: 8px;
            text-align: center;
        }
        h1 {
            font-size: 60px;
            text-align: center;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
        }
        .btn-edit {
            background-color: rgba(0, 100, 0, 0.7);
        }
        .btn-delete {
            background-color: rgba(100, 0, 0, 0.7);
        }

        .btn-edit:hover{
            color: black;
        }

        .btn-delete:hover{
            color: black;
        }

    </style>
</head>
<body>
    <h1>Lista de Veículos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Cor</th>
            <th>Placa</th>
            <th>Ano</th>
            <th>Quantidade de Portas</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <?php
        $dados = [
            ["ID" => 1, "Modelo" => "Civic", "Cor" => "Preto", "Placa" => "ABC-1234", "Ano" => 2018, "Marca" => "Honda", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 2, "Modelo" => "Corolla", "Cor" => "Branco", "Placa" => "DEF-5678", "Ano" => 2020, "Marca" => "Toyota", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 3, "Modelo" => "Shineray Worker", "Cor" => "Vermelho", "Placa" => "GHI-9101", "Ano" => 2015, "Marca" => "Shineray Worker 125", "Quantidade_de_portas" => 0, "Tipo" => "Ciclomotor"],
            ["ID" => 4, "Modelo" => "Palio", "Cor" => "Prata", "Placa" => "JKL-1121", "Ano" => 2019, "Marca" => "Fiat", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 5, "Modelo" => "Fox", "Cor" => "Azul", "Placa" => "MNO-3141", "Ano" => 2017, "Marca" => "Volkswagen", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 6, "Modelo" => "Shineray Worker", "Cor" => "Cinza", "Placa" => "PQR-5161", "Ano" => 2016, "Marca" => "Shineray Worker Cross 150", "Quantidade_de_portas" => 0, "Tipo" => "Ciclomotor"],
            ["ID" => 7, "Modelo" => "Harley-Davidson Sportster 883", "Cor" => "Branco", "Placa" => "STU-7181", "Ano" => 2021, "Marca" => "Custom", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 8, "Modelo" => "City", "Cor" => "Azul", "Placa" => "EFG-5267", "Ano" => 2018, "Marca" => "Honda", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 9, "Modelo" => "HB20", "Cor" => "Prata", "Placa" => "YZA-1223", "Ano" => 2019, "Marca" => "Hyundai", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 10, "Modelo" => "Shineray Free 150 EFI", "Cor" => "Prata", "Placa" => "DEF-5678", "Ano" => 2020, "Marca" => "Toyota", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 11, "Modelo" => "Shineray Worker", "Cor" => "Preta", "Placa" => "VWX-9202", "Ano" => 2002, "Marca" => "Shineray Jet 125 SS", "Quantidade_de_portas" => 0, "Tipo" => "Ciclomotor"],
            ["ID" => 12, "Modelo" => "Tucson", "Cor" => "Vermelho", "Placa" => "BCD-3245", "Ano" => 2020, "Marca" => "Hyundai", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 13, "Modelo" => "Fusion", "Cor" => "Preto", "Placa" => "KLM-9303", "Ano" => 2016, "Marca" => "Ford", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 14, "Modelo" => "Shineray Rio 125 EFI", "Cor" => "Branco", "Placa" => "NOP-1324", "Ano" => 2015, "Marca" => "Shineray", "Quantidade_de_portas" => 0, "Tipo" => "Ciclomotor"],
            ["ID" => 15, "Modelo" => "Fit", "Cor" => "Azul", "Placa" => "HIJ-7289", "Ano" => 2020, "Marca" => "Honda", "Quantidade_de_portas" => 0, "Tipo" => "Motocicleta"],
            ["ID" => 16, "Modelo" => "Ranger", "Cor" => "Cinza", "Placa" => "TUV-3456", "Ano" => 2021, "Marca" => "Ford", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 17, "Modelo" => "Hilux", "Cor" => "Branco", "Placa" => "WXY-4567", "Ano" => 2022, "Marca" => "Toyota", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"],
            ["ID" => 18, "Modelo" => "Honda Biz 110i", "Cor" => "Vermelho", "Placa" => "ZAB-5678", "Ano" => 2020, "Marca" => "Honda", "Quantidade_de_portas" => 0, "Tipo" => "Ciclomotor"],
            ["ID" => 19, "Modelo" => "Saveiro", "Cor" => "Preto", "Placa" => "CDE-6789", "Ano" => 2018, "Marca" => "Volkswagen", "Quantidade_de_portas" => 2, "Tipo" => "Automóvel"],
            ["ID" => 20, "Modelo" => "Amarok", "Cor" => "Branco", "Placa" => "FGH-7890", "Ano" => 2017, "Marca" => "Volkswagen", "Quantidade_de_portas" => 4, "Tipo" => "Automóvel"]
        ];

        foreach ($dados as $dado) {
            echo "<tr>";
            echo "<td>" . $dado['ID'] . "</td>";
            echo "<td>" . $dado['Modelo'] . "</td>";
            echo "<td>" . $dado['Cor'] . "</td>";
            echo "<td>" . $dado['Placa'] . "</td>";
            echo "<td>" . $dado['Ano'] . "</td>";
            echo "<td>" . $dado['Quantidade_de_portas'] . "</td>";
            echo "<td>" . $dado['Tipo'] . "</td>";
            echo "<td><a class='btn btn-edit' href='editar.php?id=" . $dado['ID'] . "'>Editar</a></td>";
            echo "<td><a class='btn btn-delete' href='excluir.php?id=" . $dado['ID'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
