<?php

echo "Bem-vindo ao Screen Match!" . "\n"; //concatenação - junta Strings

$nomeFilme = "Top Gun - Maverick"; //string
$anoLancamento = $argv[1];
$somaDeNotas = 9 + 6 + 8 + 7.5;
$somaDeNotas = $somaDeNotas + 5; //atribui 5 à variável somaDeNotas
$somaDeNotas += 1;
$notaFilme = $somaDeNotas / 5; //double (precisão dupla) ou float, num decimais

$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;
//<> diferente de

//Strings:

echo "Nome: $nomeFilme\n"; //interpolação - tudo numa string
//echo 'Nota: $notaFilme\n'; //exibe literalmente Nota: $notaFilme\n
echo "Ano Lançamento: $anoLancamento";

if ($anoLancamento > 2022) {
    echo "\nEsse filme é um lançamento.";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "\nEsse filme ainda é novo.";
} else {
    echo "\nEsse filme é antigo.";
}

