<?php
// 1. SOMAR TODOS OS NÚMEROS DE 1 A 100 E EXIBIR. RESULTADO: 5050
$i = 1; 
$resultado = 0;
while ($i <= 100) { 
$resultado = $resultado + $i;  
$i++;
}
echo "1. SOMAR TODOS OS NÚMEROS DE 1 A 100 E EXIBIR. RESULTADO: 5050";
echo "<br>";
echo $resultado;
echo "<br><br>";

// 2. MOSTRAR NÚMEROS PARES DE 2 A 20. DICA: USE %2==0
echo "2. MOSTRAR NÚMEROS PARES DE 2 A 20.";
echo "<br>";
$par=1;
do {
    if ($par %2 ==0){
        echo $par;
        echo "<br>";
    }

    $par++;
} while ($par<=20);
echo "<br>";

// 3. TABUADA DE UM NÚMERO DE 1 A 10 (EX: 7)
echo "3. TABUADA DE UM NÚMERO DE 1 A 10 (EX: 7)";
echo "<br>";

$num = 7;
for ($x = 1; $x <=10 ; $x++) {
    echo $num." x ".$x." = ".$num*$x;
    echo "<br>";
    
}
echo "<br>";

// 4. MOSTRAR NÚMEROS PARES DE 0 A 50. USE FOR.
echo "4. MOSTRAR NÚMEROS PARES DE 0 A 50. USE FOR.";
echo "<br>";
for ($par = 0; $par <= 50; $par++) {
    if ($par %2 ==0){
        echo "É par esse tal de ".$par;
        echo "<br>";
    }
}
echo "<br>";

// 5. SOMA DE TODOS OS NÚMEROS ÍMPARES DE 1 A 50.
$i = 1; 
$resultado = 0;
while ($i <= 50) { 
    if($i %2 !== 0){ 
        $resultado += $i; //$resultado = $resultado + $i;
        }
    $i++;
}
echo "5. SOMA DE TODOS OS NÚMEROS ÍMPARES DE 1 A 50.";
echo "<br>";
echo $resultado;
echo "<br><br>";

// 6. QUADRADO DOS NÚMEROS. MOSTRE: 1² = 1
echo "6. QUADRADO DOS NÚMEROS.";
echo "<br>";

$exp = 2;
for ($x = 1; $x <=10 ; $x++) {
    echo $x."² = ".$x**$exp;
    echo "<br>";
}
echo "<br>";

?>