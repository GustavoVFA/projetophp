b<?php

# carrega as classes


include_once 'exercicio2/pessoa.php';
include_once 'exercicio2/conta.php';

# criação do objetos $Carlos


$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 25, "1010411976", "Ensino Medio", 650.00);


echo "Manipulando o  Objeto {$carlos->nome}: </br> ";

echo "</br>";

echo "{$carlos->nome} é formado em {$carlos->escolaridade} </br>";