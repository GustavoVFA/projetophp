<?php

$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

while($chave = key($nomes)){
    echo "<br/>".$chave;

    next($nomes);
}