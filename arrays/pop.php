<?php

$nomes = array("Maria", "José", "pedro");
$excluido = array_pop($nomes);

foreach($nomes as $item){
    echo "<br/>".$item;
}

echo "<br/><br/> Nome Excluido: ".$excluido;