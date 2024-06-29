<?php

//var_dump($argv);

$notasFiles = [
    10,
    8,
    9,
    5.5
];

$notasFilmes = array(
    10,
    8,
    9,
    5.5
);

//var_dump("Olá");

//array associativo:
$filme = [
	"nome" => "Thor: Ragnarok",
	"ano" => 2021,
	"nota" => 7.8,
	"gênero" => "super-herói"
];

//echo $filme["nome"];

//Manipulando Arrays:
$notas = [];

for($i = 1; $i < $argc; $i++) {
    //$notas[$i-1] = (float) $argv[$i];
    $notas[] = (float) $argv[$i];
}

//var_dump($notas);

$somaDeNotas = 0;
for($i = 0; $i < count($notas); $i++) {
    $somaDeNotas += $notas[$i];
}

echo "Soma de notas com o for: $somaDeNotas\n";

$somaDeNotas = 0;
foreach($notas as $nota) {
    $somaDeNotas += $nota;
}

echo "Soma de notas com o foreach: $somaDeNotas\n";
echo "\n";

$quantidadeDeNotas = $argc - 1;
$notaFilme = $somaDeNotas / $quantidadeDeNotas;

echo "Quantidade de notas: $quantidadeDeNotas\n";
echo "Nota: $notaFilme\n";
