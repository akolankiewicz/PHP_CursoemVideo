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
    Número: <input type="number" step="0.001" name="num" value="<?= $num ?>"> <br><br>
    <input type="submit" value="Calcular">
    </main>

    <?php 
    $num = $_GET['num'] ?? 0; 
    $raiz2 = $num**(1/2) ?? 0;
    $raiz3 = $num**(1/3) ?? 0;

    ?>
    <section>
        <h1>Resultado</h1>
 <p>   <?php echo "Analisando o número $num, obtem-se:"?>  </p>
    <p><?php echo "A raiz quadrada é $raiz2"?></p>
    <p><?php echo "A raiz cúbica é $raiz3"?></p>
    </section>
</form>
</body>
</html>