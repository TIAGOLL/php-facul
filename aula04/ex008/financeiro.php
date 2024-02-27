<?php 

    include('loja.php');
    
    class Pagamento{

        public function relatorio($nome, $item, $valor){
            echo "Nome do Cliente: ".$nome."Item Comprado: ".$item."Valor do Produto: ".$valor;
        }
    }
    
    $fin = new Pagamento();
    $nome = \loja\Cliente::nome();
    $item = \Loja\Pedido::item();
    echo $fin->relatorio($nome, $item, 14.000);

    








    

?>