<?php 

$somaNotas = 0;
$quantidadeNotas = $argc - 1;

$contador = 1;
while($contador < $argc) {
    $somaNotas += $argv[$contador++];
}

$notaFilme = $somaNotas / $quantidadeNotas;

echo "Soma de Notas: $somaNotas\n";
echo "Quantidade de Notas: $quantidadeNotas\n";
echo "Nota do filme: $notaFilme";