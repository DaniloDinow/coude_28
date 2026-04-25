<?php

$nome = "Teeeeerra!";
$gloria = "Oh glória!";

echo "Hello World! - $nome <br>"; //escreve na tela
echo $gloria; //escreve na tela
echo "$gloria"; //escreve na tela o valor da variavel "interpreta"
echo '$gloria'; //escreve na tela o nome da variável
echo $nome.$gloria.'<br>';

//tipos de valores - string - int - boolean - float - null
$variavel_string = "palavra";
$variavel_int = 100 ;
$variavel_boolean = true; //verdaeiro ou falso
$variavel_float = 90.5;
$variavel_nula = null;

var_dump ($variavel_int);

//array
$valores = [$variavel_boolean, $variavel_float, $variavel_int, $variavel_string, $variavel_float]; //array indexado = valor ; array associativo = o nome é informado
print_r($valores);

echo "<pre>";
var_dump($valores);
var_dump($valores[3]);
print_r($valores[3]);

?>
