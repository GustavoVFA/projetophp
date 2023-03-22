<?php

    $QtdAulas = 0;
    $ValorAula = 0;
    $PorcentagemINSS = 0;
    $salarioBruto = $QtdAulas * $ValorAula;
    $INSS = $salarioBruto * ($PorcentagemINSS /100);
    $res = $salarioBruto - $INSS;
    
    echo"Salário Bruto = R$$salarioBruto  <br/>
         Aulas Dadas = $QtdAulas <br/>
         Salário por Aula = R$$ValorAula <br/>
         Inss = R$$INSS <br/>
         Salário Líquido = R$$res";
    


?>