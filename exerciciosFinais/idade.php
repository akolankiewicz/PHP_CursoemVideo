<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <main>
    <h1>Calculando sua Idade</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    Ano atual: <input type="number" step="0.001" name="anoatual"> <br><br>
    Ano que você nasceu: <input type="number" step="0.001" name="anonasceu">  <br><br>
    <input type="submit" value="Mostrar Divisão">
    </main>

    <?php 
    $ano = $_GET['anoatual'] ?? 2024;
    $data = $_GET['anonasceu'] ?? 0;
    $res = $ano - $data
    ?>
    <section>
        <h1>Resultados</h1>
        <?php echo "Quem nasceu em $data vai ter <strong>$res anos</strong> em $ano"?>
</form>
</body>
</html>