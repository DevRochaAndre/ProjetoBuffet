<?php
require_once "ClienteDAO.php";

$dao = new ClienteDAO();
$cliente = null;


if (isset($_GET['id'])) {
    $cliente = $dao->buscarPorId($_GET['id']);
}

if (!$cliente) {
    echo "<p>Cliente não encontrado.</p>";
    echo '<a href="index.php"><button>Voltar ao Menu</button></a>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
</head>
<body>
    <h2>Editar Cliente: <?= htmlspecialchars($cliente->Nome) ?></h2>

    <form method="POST" action="atualizar_cliente.php">
        <input type="hidden" name="id" value="<?= $cliente->Id ?>">

        <label>Escolha o campo para editar:</label><br>
        <select id="campo" name="campo" onchange="mostrarCampo()" required>
            <option value="">Selecione</option>
            <option value="Nome">Nome</option>
            <option value="CPF">CPF</option>
            <option value="Logradouro">Logradouro</option>
            <option value="Telefone">Telefone</option>
        </select><br><br>

        <div id="inputs">
            <input type="text" id="Nome" name="valor_nome" value="<?= htmlspecialchars($cliente->Nome) ?>" style="display:none" placeholder="Nome"><br>
            <input type="text" id="CPF" name="valor_cpf" value="<?= htmlspecialchars($cliente->CPF) ?>" style="display:none" placeholder="CPF"><br>
            <input type="text" id="Logradouro" name="valor_logradouro" value="<?= htmlspecialchars($cliente->Logradouro) ?>" style="display:none" placeholder="Logradouro"><br>
            <input type="text" id="Telefone" name="valor_telefone" value="<?= htmlspecialchars($cliente->Telefone) ?>" style="display:none" placeholder="Telefone"><br>
        </div>

        <button type="submit">Salvar Alteração</button>
        <a href="index.php"><button type="button">Voltar ao Menu</button></a>
    </form>

    <script>
    function mostrarCampo() {
        let campo = document.getElementById("campo").value;
        let inputs = ["Nome","CPF","Logradouro","Telefone"];
        inputs.forEach(i => {
            document.getElementById(i).style.display = (i === campo) ? "block" : "none";
        });
    }
    </script>
</body>
</html>