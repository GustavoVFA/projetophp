<?php
    print("usando print pra exibir na tela <br/>");

    $data = "01 de março de 2023";
    $salario = 1530.00;
    $cargo = "Estagiario";
    
    echo "arquivo criado em $data <br/>";

    printf("Salario minimo: R$ %.2f <br/>", $salario);

    sprintf("%s recebe R$ %.2f por mês", $cargo, $salario)
?>