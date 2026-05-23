<?php
// DESEMPENHO MENSAL DO ALUNO NAS ATIVIDADES

//dica no terminal "CD .." volta a pasta anterior "cd nome-pasta" ou "cd ./nome-pasta" vai pra pasta "php arquivo.php" executa o arquivo
$atividades_mes1 = 2;
$atividades_mes2 = 3;
$atividades_mes3 = 5;
$atividades_mes4 = 8;
$atividades_mes5 = readline("digite qtd atividade mes 5:");

function desempenho($QtdAtividades){
    if ($QtdAtividades <= 3){
        return "Precisa melhorar";
    }   else if ($QtdAtividades <= 5){
        return "Foi bem";
    }   else {
        return "Foi ótimo";
    }
}

echo desempenho($atividades_mes1)."<br>";
echo desempenho($atividades_mes2)."<br>";
echo desempenho($atividades_mes3)."<br>";
echo desempenho($atividades_mes4)."<br>";
echo desempenho($atividades_mes5)."<br>";


?>
