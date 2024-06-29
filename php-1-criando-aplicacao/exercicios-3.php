<?php
// 1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$lista = [];
for($i = 1; $i < $argc; $i++) {
    if(!in_array($argv[$i], $lista)){
        $lista[] = (float)$argv[$i];
    }
}

$lista2 = [1, 3, 5, 5, 6, 7];
$semDuplicadas = array_unique($lista2);

//----------------------------------------------------------------------------------------------------------
// 2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não. Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notas = [5.4, 8, 8.8, 7, 10];
foreach($notas as $nota) {
    if($nota >= 6) {
        //echo "Aluno aprovado com $nota\n";
    } else {
        //echo "Aluno reprovado com $nota\n";
    }
}

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";
    echo "Aluno de nota $nota foi $resultado.\n";
}

//----------------------------------------------------------------------------------------------------------
// 3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$contaBancaria = [
    "titular" => 'Márcio',
    "saldo" => 100,
];
echo "O titular $contaBancaria[titular] possui $contaBancaria[saldo] reais de saldo bancário.\n";

//----------------------------------------------------------------------------------------------------------
// 4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.

$familiares = ["Lanna", "Luann", "Edemilson", "Viviane"];
$familiares[] = "Leonardo";
array_push($familiares, 'Maira', 'Neuza', 'Letícia'); //add mais de um elemento