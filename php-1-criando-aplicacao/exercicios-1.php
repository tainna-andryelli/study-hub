<?php 
// 1 - Escreva um programa em PHP que exiba seu nome na tela.
    $meuNomePorArgv = $argv[1];
    echo "Meu nome: $meuNomePorArgv";

// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
    $nota1 = 8;
    $nota2 = 9;
    $nota3 = 10;
    $soma = $nota1;
    $soma += $nota2;
    $soma += $nota3;
    $media = $soma / 3;

    echo "\nA média é: $media";

// 3 - Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
    $valorEmMetros = 50;
    $valorEmCentimetros = $valorEmMetros * 100;
    echo "\nO valor em centímetros é $valorEmCentimetros.";

// 4 - Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
    $ano = $argv[2];
    
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        echo "\nAno é bissexto.";
    } else {
        echo "\nAno não bissexto.";
    }

// 5 - Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
    $grausCelsius = 20;
    $grausFahrenheit = ($grausCelsius * 1.8) + 32;
    echo "\n$grausCelsius ºC equivale a $grausFahrenheit F.";