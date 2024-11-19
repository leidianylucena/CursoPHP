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
        // COTACAO COPIADA DO GOOGLE
        $cotacao = 5.48;

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