<?php
//OPERADORES LÓGICOS

// !  -> NO !true
// || -> OR
// && -> AND

$negacao = 15 == 25 || 15 < 25; // um OU outro
$expre   = 15 == 25 && 15 < 25; // um E outro

// switch é sempre uma comparação de igualdade e tem de colocar o break, caso contrário quando der true ele coloca todas as opções seguintes

$dia = "q";

switch ($dia) {
    case 1:
        echo "Segunda-feira";
        break;
    case 'Terça':
        echo "Terça-feira";
        break;
    case "q":
        echo "Quarta-feira";
        break;
    default:
        echo "Dia não encontrado";
        break;
}


// ARRAY INDEXADO - [0], [1], [2], [4]

$frutas = ["uva", "maçã", "pera", "manga"];

echo '<pre>';
print_r($frutas);

echo '<br>';
print_r($frutas[0]);

// ARRAY ASSOCIATIVO
$fruta = [
    "fruta_pequena" => "uva", 
    "fruta_media"   => "maçã", 
    "fruta_amarela" => "pera", 
    "fruta_laranja" => ["manga", "laranja", "tangerina"],
    "mamão"
    ];

echo '<br>';
print_r($fruta["fruta_media"]);

echo '<br>';
print_r($fruta["fruta_laranja"][1]);

echo '<br>';
print_r($fruta[0]);

echo '<pre>';
print_r($fruta);




?>