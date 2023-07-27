<?php

    $KmLitro = 0;
    $Tempo=0;
    $Velocidade=0;

    $distancia = $Tempo * $Velocidade;
    $litrosUsados = $distancia/$KmLitro;

    echo"km por Litro = $KmLitro Km <br/>
         Tempo de Viagem = $Tempo <br/>
         Velocidade Média = $Velocidade <br/>
         Distância Percorrida = $distancia <br/>
         Combustível gasto = $litrosUsados";


?>