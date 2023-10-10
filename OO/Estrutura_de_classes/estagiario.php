<?php

Class Estagiario extends Funcionario{

// metodo GetSalario sobreescrito retorna o $salario com 12% de bonus

function getSalario(){
    return $this->salario * 1.12;
}

}