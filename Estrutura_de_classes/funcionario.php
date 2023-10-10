<?php 


class Funcionario{
    private $codigo;
    public $nome;
    private $nascimento;
    protected $salario;


    
    function setCodigo($codigo){

        $this->codigo = $codigo;

    }

    function getCodigo(){

        return $this->codigo;

    }


    
    function setNome($nome){
        
        $this->nome = $nome;
        
    }
    
    
    function getNome(){
        return $this->nome;
    }
    
    
    function setNascimento($nascimento){
        $this->nascimento = $nascimento;
    }
    
    function getNascimento(){
        return $this->nascimento;
    }
    
    function setSalario($salario){
    
        if(is_numeric($salario)&&($salario > 0)){
            $this->salario = $salario;
        }    
    }
    
    
    function getSalario(){
        return $this->salario;
    }
    
}

?>