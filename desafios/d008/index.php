<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Area de declaracoes
        $numero = $_GET['num']??1;

    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
        $rq = $numero ** (1/2);
        $rc = $numero ** (1/3);

        echo "<p>Analisando o numero <strong>$numero</strong>, temos:";
        echo "<ul><li>A sua raiz quadrada é <strong>". number_format($rq, 2, ",", ".")."</strong></li>";
        echo "<li>A sua raiz cubica é <strong>". number_format($rc, 2, ",", ".") ."</strong></li></ul>";
        ?>
    </section>
</body>
</html>