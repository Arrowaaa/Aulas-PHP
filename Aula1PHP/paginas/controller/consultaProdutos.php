<?php
// $nome_produto="Caixa";
// $valor = 15.50;

//Array
$nome_produto = [
    "Monitor",
    "Teclado",
    "Mouse"
];

$valor = [
    999.99,
    69,98,
    15.99
];


?>

<?php for($i = 0; $i < count($nome_produto); $i++) { ?>
    <h1><?= $nome_produto[$i] ?></h1>
    <span><?= $valor[$i] ?> </span>

 <?php } ?>