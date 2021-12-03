<?php

class Cliente {
    //Criar os atributos
    private $nome; 
    private $cpf; 
    private $saldo; 
    private $limite; 
    private $nConta; 

    //declarar metodos

    function setClass($nome,$cpf,$saldo,$limite,$nConta){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->nConta = $nConta;
        return "<h1>O nome do Cliente é {$nome}</h1><hr>";
    }
    function sacar ($valor){

        if ($valor>$this->saldo+$this->limite){

            echo "Excedeu o limite permitido para saque<hr>";

        }else{

        $this->saldo = $this->saldo- $valor;

        }
       
    }
    function saldo(){
        echo "<h1>Saldo de {$this->saldo} da conta {$this->nConta}</h1><hr>";
         
    }
    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    function transferir(){}
}