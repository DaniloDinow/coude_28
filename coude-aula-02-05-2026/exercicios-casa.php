<?php
// Processamento do formulário
//if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nota1 = $_POST["nota1"] ?? 0;
    $nota2 = $_POST["nota2"] ?? 0;
    $nota3 = $_POST["nota3"] ?? 0;
    $nota4 = $_POST["nota4"] ?? 0;
//}

//1º bimestre
//$nota1 = 10;

if ($nota1 < 4){
    $sit1="PÉSSIMO";
} else if ($nota1 < 6){
    $sit1="RUIM";
} else if ($nota1 < 8){
    $sit1="BOM";
} else {
    $sit1="EXCELENTE";
}

//2º bimestre
//$nota2 = 10;

if ($nota2 < 4){
    $sit2="PÉSSIMO";
} else if ($nota2 < 6){
    $sit2="RUIM";
} else if ($nota2 < 8){
    $sit2="BOM";
} else {
    $sit2="EXCELENTE";
}

//3º bimestre
//$nota3 = 7;

if ($nota3 < 4){
    $sit3="PÉSSIMO";
} else if ($nota3 < 6){
    $sit3="RUIM";
} else if ($nota3 < 8){
    $sit3="BOM";
} else {
    $sit3="EXCELENTE";
}

//4º bimestre
//$nota4 = 7;

if ($nota4 < 4){
    $sit4="PÉSSIMO";
} else if ($nota4 < 6){
    $sit4="RUIM";
} else if ($nota4 < 8){
    $sit4="BOM";
} else {
    $sit4="EXCELENTE";
}

//Nota Final
$nota_min = 6;
$media_final = ($nota1 + $nota2 + $nota3 + $nota4)/4;
if ($media_final < 4){
    $sit_final="PÉSSIMO";
} else if ($media_final < 6){
    $sit_final="RUIM";
} else if ($media_final < 8){
    $sit_final="BOM";
} else {
    $sit_final="EXCELENTE";
}
$pct_aprov = number_format(($media_final/10)*100,2)."%";

//Mensagem Final
$msg1 = ($media_final >= 6)
    ? "Parabéns, você foi aprovado neste ano letivo situado em um nível {$sit_final}, com uma porcentagem de aproveitamento de {$pct_aprov} e uma nota final de {$media_final}."
    : "Infelizmente você não obteve aprovação em razão de sua nota ter sido inferior à mínima.";

$vlr_sit1 = (strcasecmp($sit1, "EXCELENTE") === 0) ? 1 : 0;
$vlr_sit2 = (strcasecmp($sit3, "EXCELENTE") === 0) ? 1 : 0;
$vlr_sit3 = (strcasecmp($sit3, "EXCELENTE") === 0) ? 1 : 0;
$vlr_sit4 = (strcasecmp($sit4, "EXCELENTE") === 0) ? 1 : 0;
$soma_exc = ($vlr_sit1 + $vlr_sit2 + $vlr_sit3 + $vlr_sit4);

$qtd_exc = [$sit1, $sit2, $sit3, $sit4];
$cont_exc = array_count_values($qtd_exc);
//echo $cont_exc["EXCELENTE"];

$msg2 = ($soma_exc > 0)
    ? "Destaque: no ano letivo que findou, o aluno obteve {$cont_exc["EXCELENTE"]} unidade(s) em nível de EXCELÊNCIA! Muito bem!!!"
    : "Todo novo ano é uma oportunidade de buscar a excelência.";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO BOLETIM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="nota1">Nota 1º Bimestre</label><br>
        <input type="text" name="nota1" id="nota1" required>
        <br>
        <label for="nota2">Nota 2º Bimestre</label><br>
        <input type="text" name="nota2" id="nota2" required>
        <br>
        <label for="nota3">Nota 3º Bimestre</label><br>
        <input type="text" name="nota3" id="nota3" required>
        <br>
        <label for="nota4">Nota 4º Bimestre</label><br>
        <input type="text" name="nota4" id="nota4" required>
        <br>
        <button type="submit">Enviar notas</button>
    </form>
    <br>
    <table class="largura">
        <thead>
            <th>1º Bimestre</th>
            <th>Situação 1º Bimestre</th>
            <th>2º Bimestre</th>
            <th>Situação 2º Bimestre</th>
            <th>3º Bimestre</th>
            <th>Situação 3º Bimestre</th>
            <th>4º Bimestre</th>
            <th>Situação 4º Bimestre</th>
        </thead>
        <tbody>
            <td><?= $nota1?></td>
            <td class="formula"><?= $sit1?></td>
            <td><?= $nota2?></td>
            <td class="formula"><?= $sit2?></td>
            <td><?= $nota3?></td>
            <td class="formula"><?= $sit3?></td>
            <td><?= $nota4?></td>
            <td class="formula"><?= $sit4?></td>
        </tbody>
    </table>
    <br>
    <table>
        <tr>
            <th>Nota exigida por bimestre</th>
            <td><?= $nota_min?></td>
        </tr>
        <tr>
            <th>Média final do aluno</th>
            <td class="formula"><?= $media_final?></td>
        </tr>
        <tr>
            <th>Situação do aluno</th>
            <td class="formula"><?= $sit_final?></td>
        </tr>
        <tr>
            <th>Porcentagem de aproveitamento</th>
            <td class="formula"><?= $pct_aprov?></td>
        </tr>
    </table>
    <br>
    <table class="largura">
        <thead>
            <th>Mensagem Final</th>
        </thead>
        <tbody>
            <tr>
                <td class="formula">
                    <?= $msg1?>
                </td>
            </tr>
            <tr>
                <td class="formula">
                    <?= $msg2?>  
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>