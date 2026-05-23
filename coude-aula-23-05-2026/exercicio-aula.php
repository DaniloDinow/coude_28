<?php
$alunos =["danilo" =>3];
$nome = readline ("digite o nome do aluno");
$nota = readline ("digite a nota do aluno");

// Passamos $alunos por referência (usando o &) para que a alteração aconteça na variável original
function cadastrar(&$alunos, $nome, $nota) {
    $alunos[$nome] = $nota;
}

// Chamamos a função passando o array, o nome e a nota
cadastrar($alunos, $nome, $nota);

print_r($alunos);
?>