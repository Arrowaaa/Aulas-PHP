<?php
class Usuario
{
     //função para cadastrar usuários
    public function CadastroUsuario($user, $password, $passwordConfirm)
    {
        try {

            if (empty($user) || $user == null) {
                return "<br>Usuário não informado";
            }

            if (empty($password) || $password == null) {
                return "<br>Senha não informada";
            }

            if ($password != $passwordConfirm) {
                return "<br>Senhas não são iguias";
            }

            $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
            $script = "INSERT INTO tb_usuario (usuario, senha) VALUE (:usuario, :senha)";
            $preparo = $conn->prepare($script);
            $var = [
                ':usuario' => $user,
                ':senha' => $password
            ];
            $preparo->execute($var);
            return "Usuário cadastrado com sucesso " . "id: " . $conn->lastInsertId();
        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

     //função para Valida o usuário
    public function validarUsuario($user, $password)
    {
        // new PDO cria a conexão com o banco de dados
        $conn = new PDO("mysql:host=localhost;dbname=db_login", "root", "");
        // $script guarda um script para a consulta do banco, nesse caso verifica se a senha e usuario é igual
        $script = "SELECT * FROM tb_usuario WHERE usuario = '{$user}' AND senha = '{$password}'";
        // -> query executa o scritp e o -> fetch retorna o resultado do script
        // $resultado guarda o resultado da consulta
        $resultado = $conn->query($script)->fetch();
        // verifico se a variavel resultado tem algum valor
        if (!empty($resultado)) {
            echo 'Usuario Validado com sucesso!!!';
            // ele redireciona a pagina
            header('location:lista.php');
        } else {
            echo '<p class="alert alert-danger"> Usuario não encontrado.</p>';
        }
    }

     //função para lista os usuários
    public function listarUsuarios()
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_usuario";

        $lista = $conn->query($script)->fetchAll();

        return $lista;
    }

    //função para lista 1 usuário
    public function listar1Usuarios($id_consulta)
    {

        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "SELECT * FROM tb_usuario WHERE id = " . $id_consulta;

        $lista = $conn->query($script)->fetch();

        return $lista;
    }

    //função para deletar o usuário
    public function DeleteUsuario($id_delete)
    {
        $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");
        $script = "DELETE FROM tb_usuario WHERE id = :id";

        $preparo = $conn->prepare($script);

        $preparo->execute([
            ":id" => $id_delete
        ]);

        return $preparo->rowCount();
    }

    // Função para atualizar o usuário
    public function AtualizarUsuario($id_alterar, $user, $password, $passwordConfirm)
    {
        try {
            if (empty($user)) {
                return "<br>Usuário não informado";
            }

            if (empty($password)) {
                return "<br>Senha não informada";
            }

            if ($password != $passwordConfirm) {
                return "<br>Senhas não são iguais";
            }

            $conn = new PDO("mysql:host=localhost; dbname=db_login", "root", "");

           
            $script = "UPDATE tb_usuario SET usuario = :usuario, senha = :senha WHERE id = :id";
            $preparo = $conn->prepare($script);

            
            $valores = [
                ':usuario' => $user,
                ':senha' => $password,
                ':id' => $id_alterar
            ];

            
            $preparo->execute($valores);

            return "Informações alteradas com sucesso" . $id_alterar;
        } catch (PDOException $erro) {
            return "Informações não alteradas <br>" . $erro->getMessage();
        }
    }
}