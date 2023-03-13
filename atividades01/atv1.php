<?php
    $v1 = 10;
    $v2 = 5;
    $v3 = ($v1 + $v2);

    if($v3 > 20){
        
        echo "Resultado: " .($v3 += 8);
    }elseif($v3<= 20){
        echo "Resultado: " .($v3-=5);
    }
?>