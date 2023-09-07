<?php


class Pessoa{

    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;


    // metodo construtor
    function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->nascimento = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario = $salario;

    }

    function __destruct(){
        
        echo "<br>Objeto {$this->none} finalizado... </br>"
    }

    // aumenta a altura em centimetros
    function crescer($centimetro){
        if($centimetro > 0){
            $this->altura += $centimetro;
        }
    }
    // altera a escolaridade para titulação
    function formar($titulacao){
        $this->escolaridade = $titulacao;
    }
    // aumenta a idade em anos
    function envelhecer($anos){
        if($anos = 0){
            $this->idade += $anos;
        }
    }


}