bb<?php

# carrega as classes


include_once 'exercicio2/pessoa.php';
include_once 'exercicio2/conta.php';

# criação do objetos $Carlos


$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "1010411976", "Ensino Medio", 650.00);


echo "Manipulando o  Objeto {$carlos->nome}: </br> ";

echo "</br>";

echo "{$carlos->nome} é formado em {$carlos->escolaridade} </br>";

$carlos->formar("Técnico em desenvolvimento de sistemas");

echo "{$carlos->nome} é formado em {$carlos->escolaridade} </br>";

echo "{$carlos->nome} possui {$carlos->idade} anos </br>";

$carlos->envelhecer(1);

echo "{$carlos->nome} possui {$carlos->idade} anos </br>";

#criação do objeto $conta->Carlos;

$conta_carlos = new Conta(6677, "CC.1234.56", "10/07/82", $carlos, 9876, 576,89);

echo "</br>";

echo "Manipulando a conta de {$conta_carlos->titular->nome}: <br/>";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";