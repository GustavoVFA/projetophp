<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");

$chave = array_search("Ana", $nomes);

echo "<br/> Chave de busca realizada: ".$chave;