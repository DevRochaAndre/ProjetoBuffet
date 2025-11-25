<?php

class CadastrarClienteDAO {

     private $pdo;

     public function __construct($pdo) {
        $this->pdo = $pdo;
     }

     public function cadastrarCliente($Cliente){
    try {
   
    $sql = $this->pdo->prepare("insert into cliente (Nome,CPF,Logradoura,Telefone) Values (?,?,?,?)");
    $sql->execute ([
        $Cliente->inserirNome(),
        $Cliente->inserirCPF(),
        $Cliente->inserirLogradoura(),
        $Cliente->inserirTelefone()
    ]);
    echo "Registro inserido com sucesso!";
}
catch (PDOException $erro){
    echo $erro->getMessage();   

}
     }
     
}
$conexao = new Conexao();

$cliente = new Cliente();

$cadastrarClienteDAO = new CadastrarClienteDAO($conexao->getPdo());
$cadastrarClienteDAO->cadastrarCliente($cliente);


?>
<br><br>
<a href="index.php">
    <button type="button">Voltar ao Menu Principal</button>
</a>