<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculo de consumo de Conbustivel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <main>
    <div class="painel">
        <h2>Instruções</h2>
        <div class="conteudo-painel">
            <p>Esta aplicação tem como finalidade demosntrar os
            valores que seram gastos com combustivel durante uma viagem,
            com base no consumo do seu veiculo, e com a distancia determinada
            por voce!</p>
            <p>Os combustiveis disponiveis para esse calculo são:</p>
            <ul>
                <li><b>Álcool</b></li>
                <li><b>Dísel</b></li>
                <li><b>Gasolina</b></li>
            </ul>
        </div>
    </div>

    <div class="painel">
        <h2>Cálculo do valor (R$) do consumo</h2>
        <div class="conteudo-painel">
            <form action="calculo.php" method="POST">
                <label for="distancia">Distancia em Quilometros a ser percorrida </label>
                <input type="number" class="campoTexto" name="distancia" required />

                <label for="autonomia">Consumo de combustivel do veiculo (Km/L)</label>
                <input type="number" class="campoTexto" name="autonomia" required />

                <button class="botao" type="submit">Calcular</button>
            </form>    
        </div>
     </div>   
</body>
</htm>
