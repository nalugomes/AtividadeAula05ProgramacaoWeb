<?php


$arquivo_json = 'usuarios.json';

if (file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $usuarios = json_decode($json, true);
} else {
    $usuarios = [];
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Usuários Cadastrados</h2>

    <?php if (count($usuarios) > 0): ?>
        <ul>
            <?php foreach ($usuarios as $usuario): ?>
                <li>
                    <strong>Nome:</strong> <?= htmlspecialchars($usuario["nome"]) ?> |
                    <strong>Email:</strong> <?= htmlspecialchars($usuario["email"]) ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Nenhum usuário cadastrado.</p>
    <?php endif; ?>

    <br>
    <a href="cadastro.php">Cadastrar novo usuário</a>
</body>
</html>
