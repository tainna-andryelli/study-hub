<?php 

function exibeBoasVindas(string $nome): string {
    return "Bem-vindo(a), $nome!";
}

function ordenaValores(array $lista): array {
    sort($lista);
    return $lista;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, $genero){
    return [
        'nome' => $nome,
        'anoLancamento' => $anoLancamento,
        'nota' => $nota,
        'genero' => $genero,
    ];
}

function exibeMensagem(int $anoLancamento): void {
    if($anoLancamento > 2023) {
        echo "Esse filme é lançamento.\n";
    } else if($anoLancamento <= 2023 && $anoLancamento >= 2021){
        echo "Esse filme ainda é novo.\n";
    } else {
        echo "Esse filme é antigo.\n";
    }
}

function estaIncluido(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento > 2021;
}