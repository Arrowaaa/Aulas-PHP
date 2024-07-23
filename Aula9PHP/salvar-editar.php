<a href="index.php">Voltar</a><br>
<?php 

$id = $_GET['id'];
$nome = $_POST['nome'];
$foto = $_FILES['foto'];


echo "Foto do Usuário:". $foto['nome'] . "<br>";

$nomeCaminhoDaFoto = "img/". round(microtime(true)) . $foto['nome'];  
move_uploaded_file($foto['tmp_name'], $nomeCaminhoDaFoto); 

include "conexao.php";
if($foto['nome']!= ""){
    $script = "UPDATE fotos  SET nome='$nome',foto='$nomeCaminhoDaFoto' WHERE id=$id";
}else{
    $script = "UPDATE fotos  SET nome='$nome' WHERE id=$id";
}

$resultado = $conn->query($script)->fetch();

?>