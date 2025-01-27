<?php
namespace PHP\Modelo\Tela;
require_once('..\Cliente.php');
require_once('..\DAO\Conexao.php');
require_once('..\DAO\inserir.php');
use PHP\Modelo\Cliente;
use PHP\Modelo\DAO\Conexao;
use PHP\MODELO\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Cliente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    </head>
    <body>
        <form method="POST">
            <div class="mb-3">
                <label for="lCpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="tCpf" id="tCpf" placeholder="9999999999">
            </div>
            <div class="mb-3">
                <label for="lNome" class="form-label">NOME</label>
                <input type="text" class="form-control" name="tNome" id="tNome" placeholder="Insira seu nome">
            </div>
            <div class="mb-3">
                <label for="lTelefone" class="form-label">TELEFONE</label>
                <input type="text" class="form-control" name="tTelefone" id="tTelefone" placeholder="(99)99999-9999">
            </div>
            <div class="mb-3">
                <label for="lEndereco" class="form-label">ENDEREÇO</label>
                <input type="text" class="form-control" name="tEndereco" id="tEndereco" placeholder="Insira seu endereço">
            </div>
            <div class="mb-3">
                <label for="lTotalDeCompras" class="form-label">Total de Compras</label>
                <input type="text" class="form-control"
                name="tTotalDeCompras" id="tTotalDeCompras" placeholder="Insira o total de compras...">
            </div>
            <button type="submit">Cadastrar
                <?php
                $conexao = new Conexao(); //Conectar com o banco

                    $cpf = $_POST['tCpf'];
                    $nome = $_POST['tNome'];
                    $telefone = $_POST['tTelefone'];
                    $endereco = $_POST['tEndereco'];
                    $totalDeCompras = $_POST['tTotalDeCompras'];
                    
                    //INSTANCIAR
                    $inserir = new Inserir();
           
                    echo $inserir->cadastrarCliente($conexao,$cpf,$nome,$telefone,$endereco,$totalDeCompras);
                ?>
            </button>
        </form>
    
    </body>
</html>  
