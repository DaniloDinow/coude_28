<?php
echo "1 - Crie um array com 5 frutas de sua escolha. Use `foreach` para exibir cada fruta em uma linha separada.";
echo "<br><br>";

$frutas = ["Maçã","Banana","Uva","Manga","Abacaxi"];

foreach ($frutas as $fruta) {
  echo "$fruta <br>";
}
echo "<br><br>";

echo "2 - Crie um array com 4 cores. Use `foreach` com chave e valor ($ chave => $ valor) para exibir cada cor com seu número de posição, começando do 1.";
echo "<br><br>";

$cores = array("vermelho", "azul", "verde", "amarelo");

foreach ($cores as $chave =>$cor){
    echo $chave + 1 . " - $cor <br>";
}
echo "<br><br>";

echo "3 - Crie um array com 5 números inteiros. Use `foreach` para somar todos os valores e exiba o resultado ao final.";
echo "<br><br>";

$inteiros = [1, 2, 3, 4, 5];
$soma = 0;
foreach ($inteiros as $numero){
    $soma += $numero;
}
echo "Soma total: $soma <br>";
echo "<br><br>";


echo "4 - Crie um array com 6 números (misture positivos e negativos). Use `foreach` para exibir **apenas os números positivos**.";
echo "<br><br>";

$positivos = [-3, -2, -1, 1, 2, 3];
$n_positivos = [];
foreach ($positivos as $n_pos){
    if ($n_pos > 0){
        $n_positivos[] = $n_pos;
    }
}
echo "Números positivos: ".implode(", ",$n_positivos);
echo "<br><br><br>";


echo "5 - Crie um array com 4 nomes em letras minúsculas. Use `foreach` para exibir cada nome em **maiúsculas** com a função `strtoupper()`.";
echo "<br><br>";

$nomes = ["jose", "maria", "pedro", "marta"];
foreach($nomes as $apelido){
    echo strtoupper($apelido)."<br>";
}
echo "<br><br>";


echo "6 - Sem usar `count()`, crie um array com qualquer quantidade de itens. Use `foreach` para contar quantos elementos existem no array e exiba o total.";
echo "<br><br>";

$nomes = ["jose", "maria", "pedro", "marta", "mario"];
$contagem = 0;
foreach($nomes as $apelido){
   $contagem += 1;
}
echo "O array tem $contagem elementos <br>";
echo "<br><br>";


echo "7 - Crie um array com 5 números. Use `foreach` para encontrar e exibir o **maior número** do array, sem usar `max()`.";
echo "<br><br>";

$conjunto = [ 10, 42, 30, 25, 20];
$maior = min($conjunto);
foreach($conjunto as $num){
    if($num >= $maior){
        $maior=$num;
    }
}
echo "Maior valor: $maior <br>";
echo "<br><br>";

echo "8 - Crie um array associativo com o nome e a idade de 3 pessoas. Use `foreach` para exibir as informações de forma amigável.";
echo "<br><br>";

$pessoas = ["Neymar" => 34, "Vini" => 29, "Rafinha" => 28];
foreach($pessoas as $nome => $idade){
    echo "$nome tem $idade anos.<br>";
}
echo "<br><br>";

echo "9 - Crie um array associativo com o nome de 4 alunos e suas respectivas notas. Use `foreach` para exibir se cada aluno foi **Aprovado** (nota ≥ 7) ou **Reprovado**.";
echo "<br><br>";

$alunos = ["Jose"=>10, "Maria"=>10, "Pedro"=>7, "Mario" =>5];

foreach($alunos as $aluno=>$nota){
    $situacao="Reprovado";
    if ($nota >=7){
        $situacao="Aprovado";
    }
    echo "$aluno - Nota: $nota - $situacao <br>";
}
echo "<br><br>";

echo "10 - Crie um array com as palavras: `[PHP, é, uma, linguagem, incrível]`. Use `foreach` para montar e exibir a frase completa em uma única linha.";
echo "<br><br>";

$palavras = ["PHP", "é", "uma", "linguagem", "incrível"];
$frase=[];
foreach($palavras as $palavra){
    echo $palavra." ";
    $frase[]=$palavra;
}
echo "<br>";
echo implode(" ",$frase);
echo "<br><br><br>";





?>
