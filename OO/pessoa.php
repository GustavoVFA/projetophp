<?php


class Pessoa{

    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;
    // aumenta a altura em centimetros
    function crescer($centimetro){
        if($centimetro > 0){
            $this->altura += $centimetro;
        }
    }

    function formar($titulacao){
        $this->escolaridade = $titulacao;
    }
    
    function envelhecer($anos){
        if($anos = 0){
            $this->idade = $anos;
        }
    }


}