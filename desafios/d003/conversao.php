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
            // Cotação copiada do google
            $cotação = 852.45;

            // Quanto $$ voçê tem?
            $kuanza = $_REQUEST["din"] ?? 0;

            // Equivalência em dolar 
            $dolar = $kuanza / $cotação;

            // Mostrar o resultado 
            // echo "Seus Kz\$". number_format($kuanza, 2, ",", ".");

            // Formatação de moedas com internacionalização
            // Biblioteca intl (internallization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $kuanza, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>