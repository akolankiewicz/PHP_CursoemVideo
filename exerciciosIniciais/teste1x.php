<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aula4/css.css">
</head>
<body>
    <?php 
    $num = $_GET['num'];
    $suc = $num + 1;
    $ant = $num - 1;
    echo "<p>Você digitou o número $num</p>";
    echo "<p>Seu sucessor é <strong>$suc</strong> e seu antecessor é <strong>$ant</strong></p>"
    ?>
</body>
</html>