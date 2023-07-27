<?php

    $n = 250;

    if($n % 10 == 0){
        echo "este número é divisivel por 10";
    }elseif($n % 5 == 0){
        echo "esse número e divisivel por 5";
    }elseif($n % 2 == 0){
        echo "esse número é divisivel por 2";
    }else{
        echo "esse número não é divisivel por 10,5,2";
    }
?>