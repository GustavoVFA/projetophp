<?php

$nomes = array("maria", "José", "Pedro");

array_push($nomes, "ana");

foreach($nomes as $item){
    echo "<br/>".$item;
}