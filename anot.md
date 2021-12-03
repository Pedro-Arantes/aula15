Git  comandos:

    - git branch -M main
    - git pull  origin main

    -❯ git remote add origin git@github.com:Pedro-Arantes/aula3.git
    -
    -
    -
    -
    -
    -
POO- programação orientado a objetos
    -Classes
    -Metodos
    -Objetos

    -Classes tem atributos e metodos e delas saem objetos.


    venda de um produto/qnt do estoque.
    indicar q n pode



    function sacar ($valor){

        if ($valor>$this->saldo+$this->limite){

            echo "Excedeu o limite permitido para saque<hr>";

        }else{

        $this->saldo = $this->saldo- $valor;

        }


    }

    function saldo(){

        return "Saldo de {$this->saldo} da conta {$this->nConta}<br>";







        function sacar($valor){
        if ($valor>$this->saldo && $valor>$this->limite) {
            
            echo "<h1>Sem limite de saldo</h1><hr>";
        } else {
            $this->saldo = $this->saldo - $valor;
            $this->limite = $this->limite - $valor;
        }