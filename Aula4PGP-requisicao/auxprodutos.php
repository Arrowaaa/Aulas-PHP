<?php

if (!empty($_GET)){
    $busca = $_GET['nome'];

}


$conexao = new PDO('mysql:host=localhost;dbname=bd_policebox2', 'root', '');

$query = "SELECT * FROM tb_produto where titulo like '%{$busca}%'";

$resultado = $conexao->query($query)->fetchAll();

echo '<pre>';
var_dump($resultado);

?>