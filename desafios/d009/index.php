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
        $valor1 = $_GET['v1'] ?? '';
        $peso1 = $_GET['v1'] ?? '';
        $valor2 = $_GET['v2'] ?? '';
        $peso2 = $_GET['v2'] ?? '';
    ?>
    <main>
        <h1>Medias aritmeticas</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="v1" required value="<?=$valor1?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" required value="<?=$peso1?>">
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="v2" required value="<?=$valor2?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular medias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($valor1 + $valor2) / 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2)/($peso1 + $peso2);
        ?>
        <h2>Calculo das medias</h2>
        <p>Analisando os valores <?=$valor1?> e <?=$valor2?>:</p>
        <ul>
            <li>A <strong>Media aritmetica simples </strong> entre valores é igual a <?=number_format($ma, 2, ",", ".")?>.</li>
            <li>A <strong>Media aritmetica ponderada </strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mp, 2, ",", ".")?>.</li>
        </ul>
    </section>
</body>
</html>