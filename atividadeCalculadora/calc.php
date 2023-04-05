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
    echo $x1 + $x2;
    return;
}
function sub ($x1,$x2){
    echo $x1 - $x2;
    return;
}
function mult ($x1,$x2){
    echo $x1 * $x2;
    return;
}
function div ($x1,$x2){
    echo $x1 / $x2;
    return;
}

$a = 10;
$b = 20;

entrada();
$op = "+";

 switch($op){
    case '+':
        soma($a, $b);
        break;
    case '-':
        sub($a, $b);
        break;
    case '*':
        mult($a, $b);
        break;
    case '/':
        if($b == 0){
            echo "Numeros nao podem ser igual a zero";
        }else{
            div($a,$b);
        }
 }

?>