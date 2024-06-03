<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Olá Mundo</h1>

   <!--  

        Sempre é obrigatório termina com ponto e virgula ";", caso contrário da ERRO!!. 

        Similaridades entre o PHP e C#. 

        O comentário é feito da mesma forma  // ou /**/ . 

        $ Cifrão é usado para definir variável. 

        Para fazer uma Concatenação no PHP utiliza-se ponto "." . 

        Para dar quebra de linha use o echo e a TAG de quebra de linha do PHP <br>. 

        var_dump($texto);  Serve para verificar o tipo e conteúdo da variável. 

        ! Exclamação Significa negação. 

    --> 
    
    <?php // TAG para trabalhar com PHP

    echo "Olá PHP"; // Comando para exibir na tela,  ou Escreva na tela, usando a sintaxe; echo seguido de aspas " " e ;.
    
    echo "<br>"; // Comando para Pular linha / Quebra linha

    $texto = "Arrow";
    echo "<br>";

    echo "Bom dia Usuário: " .$texto;

    echo "<br>";

    //Condições
    echo "<br>";

    if (1 == 1) {
        echo "O IF deu Certo!!";

    } else if (2 == 2) {
        echo " O ELSE IF deu Certo!!";

    }else {
        echo "O IF NÃO deu Certo!!";

    }
    // Ternário é uma verificação simples, básica, fácil e de pouco codigo
    // Ternário é usado da seguinte forma..condição ? verdadeiro : falso

    echo "<br>";
    $texto == "" ? "Ternário deu Certo" : "Ternário Não deu Certo";
    echo "<br>";
    for ($cont=0; $cont < 5; $cont++){
        echo $cont . "<br>";
    }

    echo "<br>";

    $contador = 0;
    while ($contador < 2){
        echo "Estou e, tela!! <br>";
        $contador = $contador + 1;
    }
    echo "<br>";
    
    function Arrow ()
    {
        echo "Oie, eu sou uma função";
    }
    
    Arrow();
    
    echo"<br>";
    ?>
    <br>
    
    <form action="./controller/consultaProdutos.php" method="POST">

    <label for="nome">Nome: </label>
    <input type="text" id="nome" name="nome">
    <label for="nome">Preço: </label>
    <input type="text" id="preco" name="preco">
    <input type="submit" value="Consultar">

    </form>




</body>
</html>