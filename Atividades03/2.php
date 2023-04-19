<?php

$numeros = array(-10,10,-10,10,-10,10,-10,10,-10,10);
$negativos =0;
$positivos=0;
$pares=0;
$impares=0;

for($i=0;$i<10;$i++){
    if($numeros[$i] >=0){
        $positivos++;
    }else{
        $negativos++;
    }
    if($numeros[$i] % 2 == 0){
        $pares++;
    }
    else{
        $impares++;
    } 
}
    echo "<br/>".$positivos;
    echo "<br/>".$negativos;
    echo "<br/>".$pares;
    echo "<br/>".$impares;