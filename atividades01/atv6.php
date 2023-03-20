<?php

    $mul = 0;
    $hom = 0;
    $esc = 2;

    for($i = 0; $i <= 49; $i++){
        switch($esc){
            case 1:
                $hom++;
            case 2:
                $mul++;
        };

    };

    echo "Homens: $hom <br/>
    Mulheres: $mul "

?>