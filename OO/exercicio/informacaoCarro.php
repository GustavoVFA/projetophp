<?php 


include_once("Carro.php");
include_once("Contas.php");

$carro = new Carro();
$exibir = new Contas();

$exibir->numAge = 10;
$exibir->numConta = 10001;
$exibir->nome = "José";
$exibir->saldo = 100.50;


$carro->cor = "Vermelho";


$exibir->ExibeDados();
$carro->InformaCor();

$carro->Acelerar();
$carro->mostrar();
