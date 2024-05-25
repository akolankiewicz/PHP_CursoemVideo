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
    <h1>Informe um número</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    Valor 1: <input type="number" step="0.001" name="num1" value="<?= $num1 ?>"> <br><br>
    Peso de 1: <input type="number" step="0.001" name="peso1" value="<?= $peso1 ?>"><br><br>
    Valor 2: <input type="number" step="0.001" name="num2" value="<?= $num2 ?>"> <br><br>
    Peso de 2: <input type="number" step="0.001" name="peso2" value="<?= $peso2 ?>"><br><br>
    <input type="submit" value="Calcular">
    </main>

    <?php 
    $num1 = $_GET['num1'] ?? 1; 
    $peso1 = $_GET['peso1'] ?? 1; 
    $num2 = $_GET['num2'] ?? 1; 
    $peso2 = $_GET['peso2'] ?? 1; 

    $media = ($num1 + $num2) / 2 ?? 1 ;
    $mediap = ($num1*$peso1 + $num2*$peso2) / ($peso1 + $peso2) ?? 1;
    

    ?>
    <section>
        <h1>Resultado</h1>
    <p><?php echo "A média simples é de $media"?></p>
    <p><?php echo "A média ponderada é de $mediap"?></p>
    </section>
</form>
</body>
</html>