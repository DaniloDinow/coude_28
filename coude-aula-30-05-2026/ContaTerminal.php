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
        echo "$this->titular tinha $this->saldo, depositou $valor e ficou com $novosaldo.\n";
        $this->saldo = $novosaldo;
    }

    function sacar($valor){
        $this->saldo;
        $novosaldo = $this->saldo - $valor;
        echo "$this->titular tinha $this->saldo, sacou $valor e ficou com $novosaldo.\n";
        $this->saldo = $novosaldo;
    }

    function mostrarsaldo(){
        $this->saldo;
        echo "O saldo de $this->titular é de $this->saldo.\n";
    }   
}

$objContaBancaria = new ContaBancaria("Danilo", '100');

$opcao=0;

do{
echo "\n==== Conta Bancária ====\n";
echo "1 - Mostrar Saldo\n";
echo "2 - Depositar\n";
echo "3 - Sacar\n";
echo "4 - Sair\n";
$opcao = (int)readline("O que quer fazer? ");
    switch ($opcao){
        Case 1:
            $objContaBancaria->mostrarsaldo();
            break;
        Case 2:
            $valor = (int)readline("Qual valor você quer depositar? ");
            $objContaBancaria->depositar($valor);
            break;
        Case 3:
            $valor = (int)readline("Qual valor você quer sacar? ");
            $objContaBancaria->sacar($valor);
            break;
        default:
            echo "Opção inválida.\n.";
        
    }


}While($opcao!==4);
echo "Programa encerrado!"


?>
