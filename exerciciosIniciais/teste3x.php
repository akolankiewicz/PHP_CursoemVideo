<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aula4/css.css">
</head>
<body>
    <?php 
    $valor = $_GET['valor'];
    $dolar = $valor / 5.2;
    echo "<p>Você tem $$valor na carteira</p>";
    echo "<p>Em dolarés, você tem $$dolar!</p>";
    echo "<p> Cotação atual: 5,2"
    ?> 
</body>
</html>