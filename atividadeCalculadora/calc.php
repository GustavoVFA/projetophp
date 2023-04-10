<?php
    $x2 = 10;
    $x1 =20;
function entrada($x1, $x2){
    echo "Digite um número: ";
    echo "<br/> Digite a operação desejada <br/>[1] + <br/>
    [2] - <br/>
    [3] * <br/>
    [4] / :  ";
    echo "<br/> Digite o próximo número: <br/>";
    $a = $x1;
    $b = $x2;
    return;
}

function soma($a, $b){
    return $a + $b;
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

$a = 30;
$b = 20;

entrada($x1, $x2);
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