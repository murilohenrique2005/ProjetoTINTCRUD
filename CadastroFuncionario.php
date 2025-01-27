<?php 
namespace PHP\Modelo\Tela; 
require_once('..\Funcionario.php'); 
require_once('..\DAO\Conexao.php'); 
require_once('..\DAO\Inserir.php'); 

use PHP\Modelo\Funcionario; 
use PHP\Modelo\DAO\Conexao; 
use PHP\Modelo\DAO\Inserir;
?>

<!Doctype HTML> 
<html> 
<head> 
    <meta charset="UTF-8"> 
    <title>Cadastro Funcionário</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</head> 
<body> 
    <form method="POST"> 
        <div class="mb-3"> 
            <label for="lCpf" class="form-label">CPF</label> 
            <input type="text" class="form-control" name="tCpf" id="tCpf" placeholder="99999999999"> 
        </div> 
        <div class="mb-3"> 
            <label for="lNome" class="form-label">Nome</label> 
            <input type="text" class="form-control" name="tNome" id="tNome" placeholder="Insira o nome do funcionário"> 
        </div> 
        <div class="mb-3"> 
            <label for="lTelefone" class="form-label">Telefone</label> 
            <input type="text" class="form-control" name="tTelefone" id="tTelefone" placeholder="(99)99999-9999"> 
        </div> 
        <div class="mb-3"> 
            <label for="lEndereco" class="form-label">Endereço</label> 
            <input type="text" class="form-control" name="tEndereco" id="tEndereco" placeholder="Insira o endereço"> 
        </div> 

        <div class="mb-3"> 
            <label for="lSalario" class="form-label">Salário</label> 
            <input type="text" class="form-control" name="tSalario" id="tSalario" placeholder="Insira o salário"> 
            </div>
            <button type="submit">Cadastrar
                <?php

 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Conectar com o banco
        $conexao = new Conexao(); 
        $cpf = $_POST['tCpf']; 
        $nome = $_POST['tNome']; 
        $telefone = $_POST['tTelefone']; 
        $endereco = $_POST['tEndereco']; 
        $cargo = $_POST['tCargo']; 
        $salario = $_POST['tSalario']; 

        // Instanciar e cadastrar
        $inserir = new Inserir(); 
        echo $inserir->cadastrarFuncionario($conexao, $cpf, $nome, $telefone, $endereco, $salario); 
    }

    
    ?> 
</body> 
</html>


