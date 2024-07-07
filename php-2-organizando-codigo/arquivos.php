<?php

$filme = [
    "nome" => "Nemo",
    "ano" => 2003,
    "nota" => 9,
    "gênero" => "desenho"
];

$filmeComStringJson = json_encode($filme); //transforma filme - array associativo - em JSON

//transforma o JSON em Objeto
json_decode('{"nome":"Nemo","ano":2003,"nota":9,"g\u00eanero":"desenho"}'); 

//transforma o JSON em Array Associativo
json_decode('{"nome":"Nemo","ano":2003,"nota":9,"g\u00eanero":"desenho"}', true); 

//cria um arquivo JSON
file_put_contents(__DIR__ . '/filme.json', $filmeComStringJson);

//Lê o arquivo JSON:
$filename = __DIR__ . '/filme.json';
$conteudoArquivo = file_get_contents($filename); //aqui retorna como string
$arquivoEmArray = json_decode($conteudoArquivo, true);

var_dump($arquivoEmArray);
