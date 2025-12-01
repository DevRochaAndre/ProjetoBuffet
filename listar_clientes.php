<?php
require_once "ClienteDAO.php";

$dao = new ClienteDAO();
$clientes = $dao->listar();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Clientes</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; }
    </style>
    <script>
        // Função para confirmação de exclusão
        function confirmarExclusao(id, nome) {
            if (confirm("Deseja realmente excluir o cliente: " + nome + "?")) {
                window.location.href = "excluir_cliente.php?id=" + id;
            }
        }
    </script>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Logradouro</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if($clientes): ?>
                <?php foreach($clientes as $c): ?>
                    <tr>
                        <td><?= $c['Id'] ?></td>
                        <td><?= htmlspecialchars($c['Nome']) ?></td>
                        <td><?= htmlspecialchars($c['CPF']) ?></td>
                        <td><?= htmlspecialchars($c['Logradouro']) ?></td>
                        <td><?= htmlspecialchars($c['Telefone']) ?></td>
                        <td>
                            <!-- Botão Editar -->
                            <a href="editar_cliente.php?id=<?= $c['Id'] ?>"><button>Editar</button></a>
                            
                            <!-- Botão Excluir com confirmação -->
                            <button onclick="confirmarExclusao(<?= $c['Id'] ?>, '<?= addslashes($c['Nome']) ?>')">Excluir</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">Nenhum cliente cadastrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>
    <a href="index.php"><button>Voltar ao Menu</button></a>
</body>
</html>