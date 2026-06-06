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
echo "3 - Estatísticas\n";
echo "4 - Sair\n";
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

        case 3:
            if(count($alunos)==0){
                echo "Sem estatísticas para exibir.\n";
            }
            else{

                echo "\n=== ESTATÍSTICAS ===\n";
                    $contagem = 0;
                    foreach($alunos as $nome){
                    $contagem += 1;
                    }
                echo "Quantidade de alunos cadastrados: $contagem\n";
                    $somanotas = 0;
                    foreach($alunos as $nome=>$nota){
                    $somanotas += $nota;
                    }
                    $media = number_format($somanotas / $contagem , 2, ",", ".");
                echo "Media das notas: $media\n";
                    $maior = 0;
                    foreach($alunos as $nome=>$nota){
                        if($nota >= $maior){
                            $maior=$nota;
                        }
                    }
                echo "Maior nota: $maior\n";
                    $menor = $maior;
                    foreach($alunos as $nome=>$nota){
                        if($nota <= $menor){
                            $menor=$nota;
                        }
                    }
                echo "Menor nota: $menor\n"; 
                    $aprovados = 0;
                    foreach($alunos as $nome=>$nota){
                        if($nota >= 7){
                            $aprovados += 1;
                        }
                    }
                echo "Quantidade de alunos aprovados (Nota > 7): $aprovados\n";
                    $reprovados = 0;
                    foreach($alunos as $nome=>$nota){
                        if($nota < 7){
                            $reprovados += 1;
                        }
                    }
                echo "Quantidade de alunos reprovados (Nota < 7): $reprovados\n";
            }
            break;
    }
}while ($opcao !==4);
echo "Saindo...\n\n";

?>