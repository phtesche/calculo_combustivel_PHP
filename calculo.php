<?php 
//Recebendo os Valores do front-end
if ($_POST) {

$distancia = $_POST['distancia'];
$autonomia = $_POST['autonomia'];

//Variaveis com os valores da Gazolina 
$valorGasolina = 4.80;
$valorAlcool = 3.80;
$valorDisel  = 3.90;

$mensagem = "";

//validação para verificar se os valores são numericos 
if (is_numeric($distancia) && is_numeric($autonomia)) {

    if($distancia > 0 && $autonomia > 0) {

//Calculo sobre o preço das variaveis e converção de valores
$calculoGasolina = ($distancia / $autonomia) * $valorGasolina ;
$calculoGasolina = number_format($calculoGasolina, 2, ',', '.');

$calculoAlcool = ($distancia / $autonomia) * $valorAlcool ;
$calculoAlcool = number_format($calculoAlcool, 2, ',', '.');

$calculoDisel = ($distancia / $autonomia) * $valorDisel ;
$calculoDisel = number_format($calculoDisel, 2, ',', '.');

//Impressoes para os resultados do calculo
$mensagem.= "<div class='sucesso'>";
$mensagem.= "<h3>O Valor total gasto será de: </h3>";
$mensagem.= "<ul>";
$mensagem.= "<li><b>Gazolina</b> R$ ".$calculoGasolina."</li>";
$mensagem.= "<li><b>Alcool</b> R$ ".$calculoAlcool."</li>";
$mensagem.= "<li><b>Disel</b> R$ ".$calculoDisel."</li>";
$mensagem.= "</ul>";
$mensagem.= "</div>";

//impressão com a informação dos campos digitado 
//echo "<p>Distancia Informada: ".$_POST['distancia']."</p>";
//echo "<p>Autonomia Informada: ".$_POST['autonomia']."</p>";
} else {
	$mensagem.= "<div class='erro'>";
	$mensagem.= "<b>O valor da distância e da autonomia deve ser maior que zero.</b>";
	$mensagem.= "</div>";
}

//caso o valor não seja numerico exibir 
} else {
    $mensagem.= "<div class='erro'>";
    $mensagem.= "<b>O valor recebido não é numérico</b>";
	$mensagem.= "</div>";
}

//caso não receba nem um dado do formulario exibir 
} else {
	$mensagem = "<div class='erro'>";
	$mensagem.= "<b>Nenhum dado foi recebido pelo formulário</b>";
	$mensagem.= "</div>";
}
?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de Combustivel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <main>
        <div class="painel">
            <h2>Resultado do Calculo de consumo</h2>
            <div class="conteudo-painel">
                <?php 
                 echo $mensagem;
                 ?>
            </div>
        </div>
    </main>
</body>    
</html>