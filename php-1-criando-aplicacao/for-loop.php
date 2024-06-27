<?php

$somaDeNotas = 0;
$quantidadeNotas = $argc - 1;

//for(inicialização; condição da repetição; incremento){} 
for($i = 1; $i < $argc; $i++) {
    $somaDeNotas += $argv[$i];
}

$notaFilme = $somaDeNotas / $quantidadeNotas;

echo "Quantidade de notas: $quantidadeNotas \n";
echo "Soma de notas: $somaDeNotas\n";
echo "Nota do filme: $notaFilme\n";