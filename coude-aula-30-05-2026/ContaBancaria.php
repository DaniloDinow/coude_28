<?php
class ContaBancaria{
    public string $titular;
    public float $saldo;

    function __construct($titular, $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    function depositar($valor){
        $this->saldo;
        $novosaldo = $this->saldo + $valor;
        echo "$this->titular tinha $this->saldo, depositou $valor e ficou com $novosaldo.<br>";
    }

    function sacar($valor){
        $this->saldo;
        $novosaldo = $this->saldo - $valor;
        echo "$this->titular tinha $this->saldo, sacou $valor e ficou com $novosaldo.<br>";
    }
    
    function mostrarsaldo(){
        $this->saldo;
        echo "O saldo de $this->titular é de $this->saldo.<br>";
    }   
}

$objContaBancaria = new ContaBancaria("Danilo", '100');
$objContaBancaria->mostrarsaldo();
$objContaBancaria->sacar(40);
$objContaBancaria->depositar(30);



?>