<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main> 
        <h1>Conversor de Moedas</h1>
       <?php 
            // COTACAO VINDA DO BANCO CENTRAL

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
    
            // var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        // QUANTO $VOCE TEM?
        $real = $_REQUEST["din"] ?? 0;

        // EQUIVALENCIA EM DOLAR
        $dolar = $real / $cotacao;

        // MOSTRAR O RESULTADO
        // echo "Seus R\$" . number_format($real, 2, ",", ".") . " equilavem a US\$ . number_format($dolar, 2, ",", ".");"

        // Formatacao de moedas com internacionalizacao!
        // Biblioteca intl (Internallization PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>