<?php


for($x=1; $x < 11; $x++){

    if ($x == 10)
        goto desvio;
        echo"<br/>".$x;
    desvio:
    echo "<br/> Pronto, aqui está o desvio";
};