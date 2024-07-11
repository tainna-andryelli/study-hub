<?php
// Escreva um programa em PHP que abra um arquivo chamado teste.txt para ler a primeira linha e depois o fecha.
$filename = __DIR__ . '/teste.txt';
$conteudoComString = file_get_contents($filename);
$listaDasLinhas = explode(',', $conteudoComString);
$listaDasLinhas[0]; //linha 1

$arquivo = fopen($filename, 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);

// -------------------
// Escreva um programa em PHP que abra o arquivo teste.txt, acrescente a frase "PHP é incrível!" no final do arquivo e depois o feche.
file_put_contents($filename, "\nPHP é incrível!,", FILE_APPEND);

// Crie um programa que converta a string '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}' em um objeto.
$objeto = json_decode('{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}');
//var_dump($objeto);


