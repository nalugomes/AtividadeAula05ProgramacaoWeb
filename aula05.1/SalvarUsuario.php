<?php

$arquivo_json = 'usuarios.json';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $arquivo_json = 'usuarios.json';
    if (file_exists($arquivo)) {
        $json = file_get_contents($arquivo);
        $usuarios = json_decode($json, true);
    } else {
        $usuarios = [];
    }

    $novoUsuario = [
        "nome" => $nome,
        "email" => $email
    ];
    $usuarios[] = $novoUsuario;

    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    header("Location: lista_usuarios.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar Novo Usuário</h1>
    <form action="SalvarUsuario.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required></input><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <button type = "submit">Cadastrar</button>
    </form>
</body>
</html>