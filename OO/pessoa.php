<?php


class Pessoa{

    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;

    function crescer($centimetro){
        if($centimetro = 0){
            $this->altura += $centimetro;
        }
    }

}