<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexap.php');
    use PHP\Modelo\DAO\Conexao;
    
    class Consultar{
        function consultarClienteIndividual(
            conexao $conexao,
            int $cpf
        )
    {
        try{
            $conn = $conexao->conectar();
            $sql   = "select * from cliente where codigo = $cpf'";
            $result = mysqli_query($conn, $sql);

            while($dados = mysqli_fetch_Array($result))
                if($dados['codigo'] == $cpf){
                    echo "<br>CPF: ".$Dados['cpf'].
                    "<br>nome: ".$dados['nome'].
                    "<br>telefone: ".$dados['telefone'].
                    "<br>endereço: ".$dados['endereco'].                }
                    "<br>Total: ".$dados['total'].
                    return;//Finalizar o While
                    
            {

            }// fim do while
        }catch(Except $erro)
        {
            echo $erro;
        }

    }// fim do consultarClienteIndividual
}// fim da class
?>