<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
    date_default_timezone_set('America/Sao_Paulo'); // pega configs do brasil 
        echo 'hoje é dia ' . date('d/m/Y'); // d -> dia em numero, D -> dia em escrito, M -> mês em numero, m-> mes em escrito
        echo ' e a hora é ' . date('G:i:s');
    ?>
</body>
</html>