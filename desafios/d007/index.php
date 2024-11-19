<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    //$minimo = 1_380.60;
    $minimo = 1000;
    $salario = $_GET['sal'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salario (R$)</label>
            <input type="number" name="sal" id="sal" value="" step="0.01">
            <p>Considerando o salario minimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um salario de R\$". number_format($salario, 2, ",", ".")." ganha <strong>$tot salarios minimos + R\$ ". number_format($dif, 2, ",", "."). ".</strong></p>";
        ?>
    </section>
</body>
</html>