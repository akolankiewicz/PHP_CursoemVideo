<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="aula4/css.css">
</head>
<body>
    <main>
    <?php 
    $num = $_GET['num'] ?? 0;
    $int = (int)$num;
    $fra = $num - $int;
    echo "<p>Analisando o número <strong>" .number_format($num, 3, ",")."</strong> Obtemos:</p>";
    echo "<ul><li>Sua parte inteira é $int</li>";
    echo "<li>Sua parte fracionária é $fra</li></ul>";
    ?>
</main>
<p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>    

</body>
</html>