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
    <h1>Anatomia de Divisão</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="get">
    Número que será dividido: <input type="number" step="0.001" name="dividendo" value="<?= $dividendo ?>"> <br><br>
    Número que vai dividir: <input type="number" step="0.001" name="divisor" value="<?= $divisor ?>">  <br><br>
    <input type="submit" value="Mostrar Divisão">
    </main>

    <?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    $resto = $dividendo % $divisor ?? 0;
    $resultado = ($dividendo - $resto) / $divisor ?? 0;
    ?>
    <section>
        <h1>Anatomia</h1>
        <p><?php echo "A divisão formada por <strong>$dividendo / $divisor</strong> informa que: "?></p>
        <p><?php echo "O valor que será dividido é $dividendo"?></p>
        <p><?php echo "O valor que irá dividir é $divisor"?></p>
        <p><?php echo "O resto dessa divisão é $resto"?></p>
        <p><?php echo "O resultado inteiro é $resultado" ?></p>
    </section>
</form>
</body>
</html>