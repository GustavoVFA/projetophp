<?php
    
function entrada(){
    echo "Digite um número: ";
    echo "<br/> Digite a operação desejada <br/>[1] + <br/>
    [2] - <br/>
    [3] * <br/>
    [4] / :  ";
    echo "<br/> Digite o próximo número: <br/>";
    $x2 = 10;
    $x1 =20;
    return;
}

function soma ($x1, $x2){
    return $x1 + $x2;
}
function sub ($x1,$x2){
    return $x1 - $x2;
    
}
function mult ($x1,$x2){
    return $x1 * $x2;
    
}
function div ($x1,$x2){
    return $x1 / $x2;
    
}

$a = 10;
$b = 20;

entrada();
$op = "+";

function imprimir($op, $a, $b){
    switch($op){
       case '+':
           echo soma($a, $b);
           break;
       case '-':
           echo sub($a, $b);
           break;
       case '*':
           echo mult($a, $b);
           break;
       case '/':
           if($b == 0){
               echo "Numeros nao podem ser igual a zero";
           }else{
               echo div($a,$b);
           }
    }
}
imprimir($op, $a, $b);

?>