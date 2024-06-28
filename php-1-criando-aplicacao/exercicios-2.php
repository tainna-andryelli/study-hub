<?php
// 1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

for($i = 0; $i < 101; $i++) {
    if($i % 2 !== 0) {
        echo "$i\n";
    }
}

// 2 - Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
$altura = 1.80;
$peso = 120;
$imc = $peso/($altura**2);

echo "Uma pessoa com peso de $peso Kg e $altura metros de altura, possui IMC de $imc.\n";

if($imc < 18.4) {
    echo "Abaixo do peso.\n";
} elseif ($imc >= 18.4 && $imc < 24.9){
    echo "Peso ideal.\n";
} elseif ($imc >= 24.5 && $imc < 30){
    echo "Acima do peso.\n";
} else {
    echo "Obesidade.\n";
}

// 3 - Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite) dependendo do horário encontrado em uma variável (inteiro representando as horas).
$horas = 2;
if($horas > 5 && $horas < 12) {
    echo "Bom dia, agora são $horas horas.";
} elseif($horas >= 12 && $horas < 18) {
    echo "Boa tarde, agora são $horas horas.";
} else {
    echo "Boa noite, agora são $horas horas.";
}
