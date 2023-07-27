<?php

    $qtdHr = 0; $salHr=0; $nD=0; $inss=0;

    $salB = $qtdHr * $salHr + (50 * $nD);


    if($salB <= 500){
        $ir = 0;
    }else if($salB <= 1000){
        $ir = $salB* (5/100);
        $inss = $salB * (8.5/100);
    }else if($salB > 1000){
        $ir = $salB * (7*100);
        $inss = $salB * (9/100);
    }

    $salL = $salB - ($inss + $ir);
    
    echo"Salário Bruto = R$$salB  <br/>
         Horas Trabalhadas = R$$qtdHr <br/>
         Salário por Hora = R$$salHr <br/>
         Inss = R$$inss <br/>
         IR = R$$ir <br/>
         Salário Líquido = R$$salL";


?>