<a href="index.php">Voltar</a>

<?php 
$nome = $_POST["nome"];
echo "Nome do Usuário: $nome . <br>";

$foto = $_FILES["foto"]; // print_r esse comando é semelhante ao var_dump, retorna as informações 
// echo "<pre>";
// print_r($foto); 
// exit;
echo "Foto do Usuário:". $foto['name'] . "<br>";

$nomeCaminhoDaFoto = "img/". round(microtime(true)) . $foto['name'];  //(microtime) transforma a hora em numeros, 
//o round retorna o numero inteiro, e nessa linha ele tem a função de dar essa 'hora' como nome do arquivo.
move_uploaded_file($foto['tmp_name'], $nomeCaminhoDaFoto); 
//move_uploaded_file 

include "conexao.php";
$script = "INSERT INTO fotos (nome, foto) value('$nome','$nomeCaminhoDaFoto')";
$resultado = $conn->query($script)->fetch();

?>