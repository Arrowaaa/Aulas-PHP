<?php 
$_ENV = parse_ini_file('.env'); // Variavel super global$_ENV, use o comando parse_ini_file(), e o local de onde o arquivo está.

include_once './pages/header.html';
// 49 linhas antigamente
// $produtos = [
//     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ],
//     [
//         'titulo' => 'Jedi Survivor',
//         'preco' => 139.00,
//         'avaliacao' => 5,
//         'poster' => 'jedi-survivor.png'
//     ],
//     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ],
//     [
//         'titulo' => 'Jedi Survivor',
//         'preco' => 139.00,
//         'avaliacao' => 5,
//         'poster' => 'jedi-survivor.png'
//     ],
//     [
//         'titulo' => 'Baldur\'s Gate 3',
//         'preco' => 290.00,
//         'avaliacao' => 3,
//         'poster' => 'baldurs-gate-3.jpg'
//     ],
//     [
//         'titulo' => 'Death Stranding',
//         'preco' => 139.00,
//         'avaliacao' => 2,
//         'poster' => 'death-stranding.png'
//     ]
// ];

/**PDO -> php document objet
 * 
 */


 // Com a nova adaptação ao banco as 49 linhas viram 3.
$conexao = new PDO("mysql:host={$_ENV['HOST']};dbname={$_ENV['DATABASE']}", $_ENV['USER'],$_ENV['PASSWORD']);
// parametros para conecta no banco de dados.
$query = "SELECT * FROM tb_produto";

// echo '<pre>'; // Comando para deixa em forma de lista
$produtos = $conexao->query($query)->fetchAll();



include './pages/produto.php';

