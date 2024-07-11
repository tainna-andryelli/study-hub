<?php 

require __DIR__ . '/src/funcoes.php';

$anoLancamento = $argv[1];
//exibeMensagem($anoLancamento);

$notas = [];
$quantidadeNotas = $argc - 2;
$soma = 0;

for($i = 2; $i < $argc; $i++) {
    $notas[] += $argv[$i];
    $soma += $argv[$i];
}

$nota = $soma/$quantidadeNotas;
var_dump($nota);

$genero = "super-herói";
//$filme = criaFilme("Thor", $anoLancamento, $notas, $genero);