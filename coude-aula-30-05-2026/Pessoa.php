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

//exibiçao sem o construct
/*
$objPessoa2 = new Pessoa();
$objPessoa2->nome="Lorena";
$objPessoa2->idade="38";
$objPessoa2->apresentar();
*/


?>