<?php
include './classe/Usuario.php';
include './include/header.php';

/**
 * receber um id
 * chama a função da classe que apaga
 * apagar o isuario 
*/


var_dump($_GET );

$id = $_GET['id'];

$usuario = new Usuario();

$resultado = $usuario->DeleteUsuario($id);


if ($resultado == 1){
    header('location:lista.php?deletado=1');
}