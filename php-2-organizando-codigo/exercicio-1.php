<?php
// Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacaoMatematica(int $num1, int $num2, string $operacao) : float {
    $operacaoLimpa = strtolower($operacao);
    if ($operacaoLimpa == 'adição') {
        return $num1 + $num2;
    } else if ($operacaoLimpa == 'subtração') {
        return $num1 - $num2;
    } else if($operacaoLimpa == 'multiplicação'){
        return $num1 * $num2;
    } else {
        return $num1/$num2;
    }
}

function calcula(int $num1, int $num2, string $operacao): float {
    $operacaoLimpa = strtolower($operacao);

    if($operacaoLimpa == 'divisão' && $num2 == 0) {
        return NAN;
    }
    
    return match($operacaoLimpa) {
        "adição" => $num1 + $num2,
        "subtração" => $num1 - $num2,
        "multiplicação" => $num1 * $num2,
        "divisão" => $num1 / $num2,
        default => throw new InvalidArgumentException("Operação inválida: $operacao"),
    };
}

// Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
function calculaImc(float $peso, float $altura): float {
    return $peso/($altura**2);
}

$peso = 90;
$altura = 1.55;
$imc = calculaImc($peso, $altura);

if($imc < 18.5) {
    echo "Abaixo do peso.\n";
} else if ($imc >= 18.5 && $imc < 25) {
    echo "Peso ideal.\n";
} else if($imc >= 25 && $imc < 30) {
    echo "Acima do peso.\n";
} else {
    echo "Obesidade.\n";
}

// Crie uma função em PHP que converta graus celsius para Fahrenheit.

function temperaturaParaFahrenheit(float $celsius) : float {
    return ($celsius * 1.8) + 32; 
}