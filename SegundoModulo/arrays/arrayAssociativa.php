<?php

$salarios = array("João" => 2000, "Pedro" => 1000, "Maria" => 500);

echo "Salario do João é: ".$salarios['João']. "<br/>";
echo "Salario de Pedro é: ".$salarios['Pedro']. "<br/>";
echo "Salario de Maria é: ".$salarios['Maria']. "<br/><br/>";

$salarios['João'] = "Alto";
$salarios['Pedro'] = "Médio";
$salarios['Maria'] = "Baixo";

echo "Salario do João é: ".$salarios['João']. "<br/>";
echo "Salario de Pedro é: ".$salarios['Pedro']. "<br/>";
echo "Salario de Maria é: ".$salarios['Maria']. "<br/>";

?>