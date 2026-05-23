<?php
//EXERCICIO DE TERMINAL

$opcao=0;
$alunos =[];
function cadastrar(&$alunos, $nome, $nota) {
            $alunos[$nome] = $nota;
        }

do{
echo "\nEscolha uma opção:\n";
echo "1 - Cadastrar Aluno\n";
echo "2 - Listar Alunos\n";
echo "3 - Sair\n";
$opcao = (int)readline("O que quer fazer? ");
    switch ($opcao){
        case 1:
            $nome = readline ("digite o nome do aluno ");
            $nota = readline ("digite a nota do aluno ");
            cadastrar($alunos, $nome, $nota);
            echo "Aluno cadastrado com sucesso\n";
            break;
        
        case 2:
            if(count($alunos)==0){
                echo "Nenhum aluno cadastrado\n";
            }
            else{

                echo "\n=== LISTA DE ALUNOS ===\n";
                foreach($alunos as $nome=>$nota){
                    echo "Nome: $nome - Nota: $nota\n";
                    }
            }
            break;
    }
}while ($opcao !==3);
echo "Saindo...\n\n";

?>