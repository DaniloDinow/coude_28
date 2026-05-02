<?php
//CONSTANTE E VARIÁVEIS
$sobrenome = "Silva";
echo $sobrenome;
$sobrenome .= " De Jesus"; // adiciona texto a variável com o .=
echo "<br>";

const CPF = '001.123.456-78'; // NÃO MUDA

// define("CPF", "000.000.000-00");

echo CPF." ".$sobrenome; //concatenação com o .

//OPERADORES ARITIMÉTICOS
$d = 4;
$d += 4; //adiciona 4 ao valor da variável
$d++; //incrementa 1 na variável
$d--; //decrementa 1 na variável

echo "<br>";
echo $d;

$a = 4;
$b = 5;

$soma          = $a + $b;
$subtração     = $a - $b;
$multiplicacao = $a * $b;
$divisao       = $a / $b;
$resto         = $a % $b; //resto da divisão, se dividir por 2, resto = 0 o número é par, se sobrar 1 ímpar
$exponenciacao = $a ** $b;

//OPERADORES DE COMPARAÇÃO || retorna TRUE ou FALSE

$a = 4; //int
$b = 5; //string

$igual = $a == $b; //compara valor
$igualdade_restrita = $a === $b; //compara tipo e o valor

$diferente = $a <> $b; //diferente
$diferente = $a != $b; //diferente - não igual
$diferente_restrito = $a !== $b; //compara tipo e valor

$menor       = $a < $b;
$maior       = $a > $b;
$menor_igual = $a <= $b;
$maior_igual = $a >= $b;

echo "<br>";

var_dump($igual);
echo "<br>";

//CONDICIONAIS
$idade = 62;
if ($idade >=60){
    echo "Idoso";
}
else if ($idade >=35) {
    echo "Adulto";
}
else if ($idade >=18) {
    echo "Jovem";
}
else {
    echo "Criança";
}

//VERIFICADOR TERNÁRIO
echo "<br>";
$maior_de_idade = $idade >=18 ? "maior" : "menor";
echo $maior_de_idade;
echo "<br>";

$idade = 62;
if ($idade >=60){
    echo "O usuário é $maior_de_idade e é Idoso";
}
else if ($idade >=35) {
    echo "O usuário é $maior_de_idade e é Adulto";
}
else if ($idade >=18) {
    echo "O usuário é $maior_de_idade e é Jovem";
}
else {
    echo "O usuário é $maior_de_idade e é Criança";
}


?>