<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;
 
    Class Funcionario extends Pessoa{
        protected float $salario;
        public function __construct(string $cpf, string $nome, string $telefone, string $endereco, float $salario)
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->salario = $salario;
        }//fim do construtor
       
        public function __get(string $variavel):mixed{
            return $this->variavel;
        }//fim do get
 
        public function __set(string $variavel, string $novoDado):void{
            $this->variavel = $novoDado;
        }//fim do set
 
        public function imprimir():string{
            return parent::imprimir().
            "<br>Salário: ".$this->salario;
        }//fim do método
 
    }
 
 
 
 
?>