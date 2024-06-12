<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 100_000.00;
        $salario = $_GET['sal'] ?? 00;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (Kz)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.001">
            <p>Considerando o salário mínimo de <strong><?=number_format($minimo, 2, ",", "." )?>Kz</strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um salário de <strong>".number_format($salario, 2, ",", ".")."Kz</strong> ganha <strong>$tot</strong> salários mínimos <strong>+ ".number_format($dif, 2, ",", ".")."Kz</strong></p>"
        ?>
    </section>
</body>
</html>