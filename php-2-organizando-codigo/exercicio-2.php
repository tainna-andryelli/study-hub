<?php
// Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
$notas = [9, 8, 3, 4, 9, 10];

rsort($notas); //ordenação decrescente
$maioresNotas = array_slice($notas, 0, 3);

// Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.
$frase = "Vinicius Dias,1997,Programador";

$lista = explode(",", $frase);
var_dump($lista);


// Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

$alunos = ["Leonardo", "Marcelo", "Lanna", "Viviane", "Amanda", "Lucas"];

function ordenarStrings(array $string): array {
    sort($string);
    return $string;
}

$alunosOrdenados = ordenarStrings($alunos);
var_dump($alunosOrdenados);