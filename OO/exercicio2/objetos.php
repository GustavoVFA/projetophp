<?php

include_once 'pessoa.php';
include_once 'conta.php';

# Criação do objeto $conta_carlos


$conta_carlos = new Conta;
$conta_carlos->agencia = 6677;
$conta_carlos->codigo = "CC.12 34. 56";
$conta_carlos->dataDeCriacao = "10/07/02";
$conta_carlos->titular = $carlos;
$conta_carlos->senha = 9876;
$conta_carlos->saldo = 567.89;
$conta_carlos->cancelada = false;

echo "</br>";
echo "Manipulando a conta de: {$conta_carlos->titular->nome} </br>";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} </br>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} </br>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} </br>";
