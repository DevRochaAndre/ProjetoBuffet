<?php
include 'Cliente.php';
include 'Conexao.php';
include 'CadastrarClienteDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $logradouro = $_POST['logradoura'];
    $telefone = $_POST['telefone'];

    // Cria um objeto Cliente com os dados recebidos
    $cliente = new Cliente($nome, $cpf, $logradoura, $telefone);

    // Cria a conexão com o banco de dados
    $conexao = new Conexao();

     var_dump($conexao->getPdo());

    // Cria o objeto CadastrarClienteDAO e chama o método para cadastrar o cliente no banco de dados
    $cadastrarClienteDAO = new CadastrarClienteDAO($conexao->getpdo());
    
    $cadastrarClienteDAO->cadastrarCliente($cliente);

    // Redireciona ou exibe uma mensagem de sucesso
    echo "Cliente cadastrado com sucesso!";
}

?>
<br><br>
<a href="index.php">
    <button type="button">Voltar ao Menu Principal</button>
</a>