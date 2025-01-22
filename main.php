<?php
    namespace PHP\Modelo;
    require_once('Cliente.php');
    use PHP\Modelo\Cliente;

    // Criando o objeto
    $cliente1 = new cliente( "12345678910", "João Carlos", "1232232-2323", "Rua Jipa 15",1500);

    // Visualizar Dados
    echo $cliente1->imprimir();




?>