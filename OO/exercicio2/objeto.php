<?php

# Carrega as Classes

include_once 'pessoa.php';
include_once 'conta.php';

# Criação do objeto $carlos

$carlos = new Pessoa;

$carlos->codigo = 10;
$carlos->nome = "Carlos da Silva";
$carlos->altura = 1.85;
$carlos->idade = 25;
$carlos->nascimento = '10/04/1976';
$carlos->escolaridade = "Ensino Médio";

echo "Manipulando o objeto $carlos->nome: \n";
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n";

$carlos->formar('Técnico em Eletricidade');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} \n";
echo "{$carlos->nome} possui {$carlos->idade} anos \n";

$carlos->envelhecer(1);
echo "{$carlos->nome} possui {$carlos->idade} anos \n";
