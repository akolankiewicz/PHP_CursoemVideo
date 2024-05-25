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
    <h1>Salário Minímo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    Valor do seu salário: <input type="number" step="0.001" name="salario" value="<?= $salario ?>"> <br><br>
    <input type="submit" value="Calcular">
    </main>

    <?php 
    $salario = $_GET['salario'] ?? 0; 
    $qtdSalario = floor($salario/1400) ?? 0;
    $sobra = $salario%1400;

    ?>
    <section>
        <h1>Resultado</h1>
    <?php echo "Você recebe $qtdSalario salários minimo(s) e $$sobra reais."?>
    </section>
</form>
</body>
</html>