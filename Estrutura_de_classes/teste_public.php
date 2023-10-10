<?php

include_once 'funcionario.php';
include_once 'estagiario.php';

//cria objeto Funcionaria
$pedrinho = new Funcionario();
$pedrinho->nome = 'Pedrinho';

// cria objeto Estagiaria
$mariana = new Estagiario();
$mariana->nome = '<br/> Mariana';

// Imprime propriedade nome

echo $pedrinho->nome;
echo $mariana->nome;

