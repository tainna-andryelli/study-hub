<?php 

$saldo = 4000.00;

while(true){
    echo "***********************\n";
    echo "Titular: Tainná Ribeiro\n";
    echo "Saldo: R$ " . number_format($saldo, 2)."\n";
    echo "***********************\n";
    echo "Opções: \n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "***********************\n";
    echo "Digite uma ação: ";
    $acao = (int) fgets(STDIN);

    if($acao == 2) {
        echo "Digite o valor de saque: \n";
        $valor = (float) fgets(STDIN);
        if ($valor > $saldo || $valor <= 0) {
            echo "Valor inválido.\n";
        } else {
            $saldo -= $valor;
            echo "Saque realizado com sucesso.\n";
        }
    } else if ($acao == 3) {
        echo "Digite o valor de depósito: \n";
        $valor = (float) fgets(STDIN);
        if($valor <= 0) {
            echo "Valor inválido. \n";
        } else {
            $saldo += $valor;
            echo "Depósito realizado com sucesso.\n";
        }
    } else if ($acao == 4) {
        echo "Adeus!";
        break;
    } else if ($acao != 1){
        echo "Ação inválida.\n";
    }
}