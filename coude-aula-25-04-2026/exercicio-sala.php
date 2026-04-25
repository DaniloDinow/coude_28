<?php
//crie as variáveis
$aluno_nome = "Danilo";
$aluno_idade = 41;
$aluno_altura = 1.81;
$aluno_status = true;

//exiba na tela
echo $aluno_nome.'<br>';
echo $aluno_idade.'<br>';
echo $aluno_altura.'<br>';
echo $aluno_status.'<br>';

//monte uma frase
echo '<br>';
echo "Meu nome é $aluno_nome, tenho $aluno_idade anos de idade. <br>";

//crie um array com 5 alunos, nomee sobre e mostre o array na tela e depois mostre o nome do aluno 3
echo '<br>';
$alunos =["Danilo Lima", "Danilo Freitas", "Danilo Miranda", "Danilo Dinow", "Minha Jóia"];
print_r($alunos);
echo '<br><br>';
print_r($alunos[3]);

// separa em partes
echo '<br><br>';
$partes = explode(" ", $alunos[3]);
echo $partes[0];

echo '<br><br>';
// se quiser só o último sobrenome
echo end($partes);


