<?php
class Pessoa {
    public string $nome;
    public int $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function apresentar(){
        echo "Sou $this->nome, tenho $this->idade anos.<br>";
    }

}
$objPessoa1 = new Pessoa ("Danilo", 41);
$objPessoa1->apresentar();

$objPessoa2 = new Pessoa ("Lorena", 38);
$objPessoa2->apresentar();



?>