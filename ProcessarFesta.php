<?php
include 'conexao.php';
include 'Festa.php';
include 'CadastrarFestaDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nomePacote = $_POST['nomePacote'];
    $descricao = $_POST['descricao'];

    //gui criando objeto
    $festa = new Festa($nomePacote, $descricao, $valor);

    //gui fazendo conexão
    $conexao = new Conexao();
    $pdo = $conexao->getPdo();

    $dao = new CadastrarFestaDAO($pdo);
    $dao->cadastrarFesta($festa);
}
?>
<br><br>
<a href="index.php"><button>Voltar ao Menu</button></a>
