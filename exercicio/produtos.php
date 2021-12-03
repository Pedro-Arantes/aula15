<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //faz a requisiçao da classe produto para ser usado
        require("./class/Produto.class.php");

        //criar o objeto com base na classe:

        $c1 = new Produto();
        $c1->setClass("Ventilador",80,300,2000,10,2010);
        $c1->produto();
        $c1->compra(100);
        $c1->produto();
        $c1->reestoque(100);
        $c1->produto();
        $c1->compra(2000);
        $c1->devolucao(1);
        $c1->produto();


        

        


    ?>
</body>
</html>