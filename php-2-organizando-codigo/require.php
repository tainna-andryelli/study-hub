<?php

require __DIR__ . "/funcoes.php";

$lista = ["maçã", "banana", "abacate", "pera", "abacaxi"];

$frutasOrdenadas = ordenaValores($lista);
var_dump($frutasOrdenadas);

echo exibeBoasVindas("Tainná");