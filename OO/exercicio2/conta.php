<?php

class Conta
{

    var $agencia;
    var $codigo;
    var $dataDeCriacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelada;

    function retirar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo -= $quantia;
        }
    }

    //aumenta o saldo em quantia
    function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    //retorna o saldo atual
    function obterSaldo()
    {
        return $this->saldo;
    }



    function __construct($agencia, $codigo, $dataDeCriacao, $titular, $senha, $saldo, $cancelada)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->dataDeCriacao = $dataDeCriacao;
        $this->titular = $titular;
        $this->senha = $senha;
        $this->saldo = $saldo;
        $this->cancelada = $cancelada;
    }

    function __destruct()
    {
        echo "<br>Objeto Conta{$this->codigo} de {$this->titular->nome} finalizada... </br>";
    }
}
