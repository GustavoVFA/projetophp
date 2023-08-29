<?php

Class Contas{
    var $numAge;
    var $numConta;
    var $nome;
    var $saldo;


    function ExibeDados(){
       echo "idade: ". $this->numAge. "</br>";
       echo "Conta: ". $this->numConta. "</br>";
       echo "Nome: ". $this->nome. "</br>";
       echo "Saldo: ". $this->saldo. "</br>";
    }
};
