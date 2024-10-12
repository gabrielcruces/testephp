<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <h1>Coversor de Moedas</h1>
<?php

$cotação = 5.61;

$real = $_REQUEST["din"] ?? 0;

$dólar = $real / $cotação;



$padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dólar, "USD") . "<strong></p>";
?>
<button onclick="javascript:history.go(-1)">Voltar</button>
</main>
</body>
</html>
