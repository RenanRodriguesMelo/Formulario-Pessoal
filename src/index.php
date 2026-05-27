<?php
require_once 'Pessoa.php';

$pessoa1 = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $sobrenome = trim($_POST['sobrenome'] ?? '');
    $idade = isset($_POST['idade']) ? (int)$_POST['idade'] : 0;

    if ($nome !== '' && $sobrenome !== '' && $idade > 0) {
        $pessoa1 = new Pessoa(nome: $nome, sobrenome: $sobrenome, idade: $idade);
    }
}
?>

<!doctype html>
<html lang="pt-BR" data-bs-theme="light">

<head>
    <title>Formulário de Pessoa</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="../assets/logo.png">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <form action="index.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobrenome" name="sobrenome" required>
                </div>
                <div class="mb-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" id="idade" name="idade" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

        <div class="container mt-4">
            <?php if ($pessoa1 !== null) : ?>
                <h2>Dados da Pessoa</h2>
                <p><strong>Nome:</strong> <?= htmlspecialchars($pessoa1->getNome(), ENT_QUOTES, 'UTF-8') ?></p>
                <p><strong>Sobrenome:</strong> <?= htmlspecialchars($pessoa1->getSobrenome(), ENT_QUOTES, 'UTF-8') ?></p>
                <p><strong>Idade:</strong> <?= $pessoa1->getIdade() ?></p>
            <?php endif; ?>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>