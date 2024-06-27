<?php 

$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Moana";

//instrução match é uma expressão condicional php8+
//importante tratar todos os casos possíveis
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação", 
    "Se beber não case" => "comédia",
    "Thor: Ragnarok" => "super-herói",
    default => "gênero desconhecido"
};

echo "O gênero do filme é: $genero";