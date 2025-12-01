<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menu Principal - Buffet</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Menu Principal - Buffet</h1>

    <div class="d-flex gap-3">
        <a href="formulario_cliente.php" class="btn btn-success btn-lg">Cadastrar Cliente</a>
        <a href="listar_clientes.php" class="btn btn-primary btn-lg">Listar Clientes</a>
    </div>

    <?php
    if (isset($_GET['mensagem'])) {
        echo "<div class='alert alert-success mt-3'>" . htmlspecialchars($_GET['mensagem']) . "</div>";
    }
    ?>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>