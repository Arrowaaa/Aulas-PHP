<?php
include 'classe/Usuario.php';
include 'classe/Pessoa.php';



echo "<pre>";
var_dump($_POST);
echo "</pre>";

//se o campo NÃO estiver preenchido ele cadastra a informação no banco de dados
if (empty($_POST['id_para_alterar'])) { //função de condição para altera usuario cadastrado, caso ele deseje altera alguma informação
    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    
    $pessoa = new Pessoa();

    $usuario = new Usuario();

    
    $resultado = $usuario->CadastroUsuario($user, $password, $passwordConfirm);

    echo $resultado;

}

//valida se o campo esta preenchido
//se o campo estivr preenchido ele vai fazer um update no banco de dados
if (!empty($_POST['id_para_alterar'])){

    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    $passwordConfirm = $_POST['confirma'];
    $id_para_alterar = $_POST['id_para_alterar'];

    $usuario = new Usuario();

    $resultado = $usuario->AtualizarUsuario($id_para_alterar, $user, $password, $passwordConfirm);


}
