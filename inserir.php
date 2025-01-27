<?php
namespace PHP\Modelo\DAO;

require_once('conexao.php');
use PHP\Modelo\DAO\Conexao;

class Inserir {
   
    function cadastrarCliente(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, float $valorTotal) {
        try {
            $conn = $conexao->conectar();

            
            $sql = "INSERT INTO cliente(codigo, nome, telefone, endereco, total) VALUES('$cpf', '$nome', '$telefone', '$endereco', '$valorTotal')";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn); 

            
            if ($result) {
                return "<br><br>Inserido com sucesso!";
            }
            return "<br><br> Não Inserido";
        } catch (Exception $erro) {
            return "<br><br>Algo deu errado: " . $erro->getMessage();
        }
    }

    // Método para cadastrar funcionário
    function cadastrarFuncionario(Conexao $conexao, string $cpf, string $nome, string $telefone, string $endereco, float $salario) {
        try {
            $conn = $conexao->conectar(); 

            // Corrigindo o SQL
            $sql = "INSERT INTO Funcionario(codigo, nome, telefone, endereco, salario) VALUES('$cpf', '$nome', '$telefone', '$endereco', '$salario')";
            $result = mysqli_query($conn, $sql);

            mysqli_close($conn); 

            
            if ($result) {
                return "<br>Inserido com Sucesso!";
            }
            return "<br>Não Inserido!";
        } catch (Exception $erro) {
            return "<br>Erro ao cadastrar funcionário: " . $erro;
        }
    }
}
?>
