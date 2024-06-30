<?php 
// Crie uma função que exibe uma mensagem informando se um filme é lançamento ou não;
function exibeMensagem(int $anoLancamento): void {
    if($anoLancamento > 2023) {
        echo "Esse filme é lançamento.\n";
    } else if($anoLancamento <= 2023 && $anoLancamento >= 2021){
        echo "Esse filme ainda é novo.\n";
    } else {
        echo "Esse filme é antigo.\n";
    }
}

$anoLancamento = $argv[1];
//exibeMensagem($anoLancamento);

// Crie a função responsável por determinar se um filme está ou não incluído no plano;

function estaIncluido(bool $planoPrime, int $anoLancamento): bool {
    return $planoPrime || $anoLancamento > 2021;
}

// Adicione os tipos corretos nos parâmetros e retorno das funções recém-criadas.