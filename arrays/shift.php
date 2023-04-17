<?php

$nomes = array("Maria", "José", "Pèdro");

$excluido = array_shift($nomes);

foreach($nomes as $item){
    echo "<br/>".$item;
}
echo"<br/><br/> Nome Removido: ".$excluido;