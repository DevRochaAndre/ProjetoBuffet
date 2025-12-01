<?php
include 'Festa.php';
include 'conexao.php';
include 'CadastrarFestaDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomePacote = $_POST['nomePacote'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $festa = new Festa($nomePacote, $descricao, $valor);

    $conexao = new conexao();
    $conexao->abrirConexao();
    $pdo = $conexao->getPdo();

    $dao = new CadastrarFestaDAO($pdo);
    $dao->cadastrarFesta($festa);
}
?>

<a href="index.php"><button>Voltar ao Menu</button></a>
