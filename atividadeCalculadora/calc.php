<?php
    
function entrada(){
    echo "Digite um número: ";
    echo "<br/> Digite a operação desejada <br/>[1] + <br/>
    [2] - <br/>
    [3] * <br/>
    [4] / :  ";
    echo "<br/> Digite o próximo número: ";
    $a = 10;
    $b=20;
    return($a);
    return($b);
}

function soma ($x1,$x2){
    $x1 + $x2;
    return;
}
function sub ($x1,$x2){
    $x1 - $x2;
    return;
}
function mult ($x1,$x2){
    $x1 * $x2;
    return;
}
function div ($x1,$x2){
    $x1 / $x2;
    return;
}



entrada();
$op = 1;

function saida($operacao){
    echo $operacao;
}


saida(soma($a,$b));


?>