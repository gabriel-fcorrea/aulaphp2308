<?php

    $verde = 10.00;
    $azul = 20.00;
    $amarelo = 30.00;
    $vermelho = 40.00;
    $client_op = "amarelo";
    $client_qtd = 2.00;

    

    if($client_op == "amarelo") {
        $price = $amarelo * $client_qtd;
        $fprice = sprintf("%0.2f", $price);
        echo("Total da compra R$" . $fprice);
    }


?>