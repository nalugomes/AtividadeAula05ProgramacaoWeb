<?php

function calcularTabuada($num) {
    $resultado = "";
    for ($i = 1; $i <= 10; $i++) {
        $resultado .= "$i x $num = " . ($i * $num) . "\n";
    }
    return $resultado;
}

$arquivo = "tabuada.txt";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    
    $tabuada = calcularTabuada($numero);

    file_put_contents($arquivo, $tabuada);
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Gerar Tabuada</title>
</head>
<body>
    <h2>Gerar Tabuada</h2>
    <form method="post">
        Digite um número: 
        <input type="number" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
    if (file_exists($arquivo)) {
        echo "<h3>Conteúdo do arquivo tabuada.txt:</h3>";
        echo nl2br(file_get_contents($arquivo));
    }
    ?>
</body>
</html>
