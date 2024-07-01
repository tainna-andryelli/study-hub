<?php

$notas = [];
for($i = 1; $i < $argc; $i++) {
    $notas[] = $argv[$i];
}

//var_dump($notas);
sort($notas);
//var_dump($notas);

$valorMinimo = min($notas);
$valorMaximo = max($notas);

//Operando textos:
$nomeFilme = "Thor: Ragnarock";
$posicaoDoisPontos = strpos($nomeFilme, ":");
$primeiroNome = substr($nomeFilme, 0, $posicaoDoisPontos);

var_dump($primeiroNome);