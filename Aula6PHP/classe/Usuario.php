<?php

class Usuario{
    public function cadastroUsuario($user, $password, $confirma){
        try {

            if (empty($user) || $user == null) {
                return "Usuario não informado !!!";
            }

            if (empty($password) || $password == null) {
                return "Senha não informada !!!";
            }

            if ($password != $confirma) {
                return "Senha não Coincidem !!!";
            }
            

            $conn = new PDO("mysql:host=localhost;dbname=db_login","root","");   
            $script = 'INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)';   
            $preparo = $conn -> prepare($script);
            $var = [
                ':usuario' => $user,
                ':senha' => $password
            ];
            $preparo->execute($var);

            return "Cadastrado com Sucesso !! ". "Id" ." ". $conn->lastInsertId();
        
        }
        catch (PDOException $erro){
            echo "Erro no Sistema" . $erro->getMessage();
        }
        
    }
}