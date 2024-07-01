<?php 

function exibeBoasVindas(string $nome): string {
    return "Bem-vindo(a), $nome!";
}

function ordenaValores(array $lista): array {
    sort($lista);
    return $lista;
}