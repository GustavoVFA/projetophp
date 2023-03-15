<?php
    $n1 = 30;
    $n2 = 20;
    $n3 = 10;
    if($n1 >= $n2 && $n2 >= $n3){ 
        echo "A ordem decrescente é: " .$n1. "\n" .$n2."\n".$n3; 
    }else if ($n1 >= $n3 && $n3 >= $n2){
        echo "A ordem decrescente é: ".$n1."\n".$n3."\n".$n2; 
    }else if($n2 >= $n1 && $n1 >= $n3){
        echo "A ordem decrescente é: ". $n2."\n".$n1."\n".$n3; 
    }else if($n2 >= $n3 && $n3 >= $n1){
        echo "A ordem decrescente é: ". $n2. "\n" .$n3."\n".$n1; 
    }else if($n3 >= $n1 && $n1 >= $n2){
        echo "A ordem decrescente é: ". $n3."\n".$n1."\n".$n2; 
    }else if($n3 >= $n2 && $n2 >= $n1){
        echo "A ordem decrescente é: ". $n3."\n".$n2."\n".$n1; 
    }
 ?>