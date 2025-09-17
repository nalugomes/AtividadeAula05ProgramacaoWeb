<?php

$arquivo = "frases.txt";

$frases  = "1- Claraboia melhor album do mpb do ano.\n";
$frases .= "2- Agente secreto um grande filme, ainda não assisti\n";
$frases .= "3- Mini churros Alexandre de Moraes.\n";

file_put_contents($arquivo, $frases);


if (file_exists($arquivo)) {
    echo "<h3>Conteúdo gravado no arquivo:</h3>";
    echo nl2br(file_get_contents($arquivo)); 
} else {
    echo "Erro: não foi possível criar o arquivo!";
}
?>
