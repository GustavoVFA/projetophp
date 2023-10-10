<?php

include_once 'funcionario.php';
include_once 'estagiario.php';

$pedrinho = new Estagiario();

$pedrinho->setSalario(248);

echo "O Salário do Pedrinho é R$:". $pedrinho->getSalario(). "<br/>";