<?php

class Produto {

    //Atributos(variaveis):
    private $nome;
    private $preco;
    private $estoque;
    private $garantia;
    private $desconto;
    private $anoAtual;

    //Métodos(funçoes):
    function setClass($nome,$preco,$estoque,$garantia,$desconto,$anoAtual){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->garantia = $garantia;
        $this->desconto = $desconto;
        $this->anoAtual = $anoAtual;
    }
    function compra($valor){

        if ($valor>$this->estoque){

            echo "Não temos mais desse produto em estoque!<hr>";

        }else{

            $this->estoque = $this->estoque - $valor;
            $porcentagem = $this->preco * ($this->desconto)/100;
            $oferta = $valor * ($this->preco - $porcentagem);
            echo "O Produto saiu a {$oferta} reais,obrigado pela preferência!<hr>";

        }
    }
    function reestoque($valor){
        $this->estoque = $this->estoque + $valor;
    }
    function produto(){
        echo "Nome do Produto: {$this->nome}<br>";
        echo "Preço: {$this->preco}<br>";
        echo "Estoque: {$this->estoque}<br>";
        echo "Garantia: {$this->garantia}<br>";
        echo "Desconto: {$this->desconto}<br>";
        echo "Ano Atual: {$this->anoAtual}<hr>";

    }
    function devolucao($valor){
        if ($this->anoAtual>$this->garantia) {
            echo "Este produto está fora da garantia e não pode ser devolvido. <hr>";
        } else {
            echo "O seu produto foi devolvido com sucesso!";
            $this->estoque = $this->estoque + $valor;
        }
    }
}