<?php 

include_once('Produto.php');

$produto1 = new Produto();

$produto2 = new Produto();

$produto1->Codigo = 4001;
$produto1->Descricao = 'cd - The best eric clapton';


$produto2->Codigo = 4002;
$produto1->Descricao = 'cd - The Eagles of california';

$produto1->ImprimirEtiqueta();
$produto2->ImprimirEtiqueta();

